<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  public function index(Request $request)
  {
    if (!auth()->user()->can('user_list')) {
      return redirect()->back()->with(['flash_message_error' => 'Not Access Permission']);
    }
    $user = User::query();
    $role = Role::all();
    if ($request->ajax()) {
      return datatables()->of($user)
        ->addColumn('created', function ($data) {
          return date('d M, Y', strtotime($data->created_at));
        })
        ->addColumn('aksi', function ($data) {
          $button = '<button class="btn btn-primary waves-effect waves-light btn-sm edit" id="' . $data->id . '" data-toggle="tooltip" data-placement="right" title="Edit Data Yang Anda Pilih"><i class="fas fa-edit"></i></button>';
          $button .= '<button class="btn btn-sm btn-danger ml-1 hapus" id="' . $data->id . '" name="hapus"><i class="fas fa-trash"></i></button>';
          $button .= '<button class="btn btn-sm btn-info ml-1 detail" id="' . $data->id . '" name="hapus"><i class="fas fa-eye"></i></button>';
          return $button;
        })->rawColumns(['aksi', 'created'])
        ->make(true);
    }
    return view('admin.user.list')->with(compact('role'));
  }

  public function addUser(Request $request)
  {
    if (!auth()->user()->can('user_add')) {
      return response()->json(['message' => 'Permisson Not Access'], 422);
    }
    $rules = [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8'],
    ];
    $validasi = Validator::make($request->all(), $rules);

    if ($validasi->fails()) {
      return response()->json(['message' => 'Data Gagal Di simpan', 'message' => $validasi->errors()->first()], 422);
    }

    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    $user->assignRole($request->role);

    return response()->json(['message' => 'Data Berhasil Di simpan'], 200);
  }

  public function editUser(Request $request)
  {
    if (!auth()->user()->can('user_edit')) {
      return response()->json(['message' => 'Permisson Not Access'], 422);
    }
    $data = User::find($request->id);

    if (!$data) {
      return response()->json(['message' => 'Data Tidak Tersedia'], 404);
    }

    $data->roles->pluck('name');

    return response()->json($data);
  }
  public function updateUser(Request $request)
  {
    if (!auth()->user()->can('user_edit')) {
      return response()->json(['message' => 'Permisson Not Access'], 422);
    }
    $id = $request->id_edit;

    $rules = [
      'name' => ['required', 'string', 'max:255'],
      'email' => 'required|string|email|max:255|unique:users,email,' . $id,
    ];
    $validasi = Validator::make($request->all(), $rules);

    if ($validasi->fails()) {
      return response()->json(['message' => 'Data Gagal Di simpan', 'message' => $validasi->errors()->first()], 422);
    }

    $user = User::find($id);
    if (!$user) {
      return response()->json(['message' => 'Data Tidak Tersedia'], 404);
    }


    if ($request->password) {
      $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
      ]);
    } else {
      $user->update([
        'name' => $request->name,
        'email' => $request->email,
      ]);
    }
    $user->syncRoles($request->role);
    return response()->json(['message' => 'Data Berhasil Di Edit'], 200);
  }


  public function delUser(Request $request)
  {
    if (!auth()->user()->can('user_delete')) {
      return response()->json(['message' => 'Permisson Not Access'], 422);
    }
    $data = User::find($request->id);

    if (!$data) {
      return response()->json(['message' => 'Data Tidak Tersedia'], 404);
    }
    $data->delete();
    return response()->json(['message' => 'Data Berhasil Di Hapus'], 200);
  }

  public function detailUser(Request $request, $id)
  {
    if (!auth()->user()->can('user_detail')) {
      return redirect()->back()->with(['flash_message_error' => 'Not Access Permission']);
    }
    $user = User::find($id);
    if (!$user) {
      return redirect()->back()->with(['flash_message_error' => 'Data Tidak Tersedia']);
    }
    $perm = Permission::query();
    if ($request->ajax()) {
      return datatables()->of($perm)
        ->addColumn('aksi', function ($data) use ($user) {


          $button = '';
          if ($user->can($data->name)) {
            $button .= '<button class="btn btn-default waves-effect waves-light btn-sm permission" id="' . $data->name . '" data-access="0" data-toggle="tooltip" data-placement="right" title="Edit Data Yang Anda Pilih"><i class="fas fa-toggle-on"></i></button>';
          } else {
            $button .= '<button class="btn btn-default waves-effect waves-light btn-sm permission" id="' . $data->name . '"  data-access="1" data-toggle="tooltip" data-placement="right" title="Edit Data Yang Anda Pilih"><i class="fas fa-toggle-off"></i></button>';
          }
          // $button = '';

          // $button .= '<button class="btn btn-sm btn-danger ml-1 hapus" id="' . $data->id . '" name="hapus"><i class="fas fa-trash"></i></button>';
          return $button;
        })->rawColumns(['aksi'])
        ->make(true);
    }



    return view('admin.user.detail')->with(compact('user'));
  }

  public function assignPermission(Request $request)
  {
    if (!auth()->user()->can('user_detail')) {
      return response()->json(['message' => 'Permisson Not Access'], 422);
    }
    $id = $request->iduser;
    $permission_name = $request->permission_name;
    $dataaccess = $request->dataaccess;
    $user = User::find($id);

    if ($dataaccess == 1) {
      $user->givePermissionTo($permission_name);
    } else {
      $user->revokePermissionTo($permission_name);
    }


    return response()->json(['message' => 'Data Berhasil Di Edit'], 200);
  }
}
