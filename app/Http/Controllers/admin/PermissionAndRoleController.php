<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class PermissionAndRoleController extends Controller
{
  public function index(Request $request)
  {
    if (!auth()->user()->can('roles_list')) {
      return redirect()->back()->with(['flash_message_error' => 'Not Access Permission']);
    }
    $roles = Role::query();
    if ($request->ajax()) {
      return datatables()->of($roles)
        ->addColumn('aksi', function ($data) {
          $button = '<button class="btn btn-primary waves-effect waves-light btn-sm edit" id="' . $data->id . '" data-toggle="tooltip" data-placement="right" title="Edit Data Yang Anda Pilih"><i class="fas fa-edit"></i></button>';
          $button .= '<button class="btn btn-sm btn-danger ml-1 hapus" id="' . $data->id . '" name="hapus"><i class="fas fa-trash"></i></button>';
          return $button;
        })->rawColumns(['aksi'])
        ->make(true);
    }

    return view('admin.permissionRoles.roles.index');
  }

  public function addRoles(Request $request)
  {
    if (!auth()->user()->can('roles_add')) {
      return response()->json(['message' => 'Permisson Not Access'], 422);
    }
    $rules = [
      'name' => 'required',
    ];

    $validasi = Validator::make($request->all(), $rules);

    if ($validasi->fails()) {
      return response()->json(['message' => 'Data Gagal Di simpan', 'message' => $validasi->errors()->first()], 422);
    }

    Role::create(['name' => $request->name, 'desc' => $request->desc]);

    return response()->json(['message' => 'Data Berhasil Di simpan'], 200);
  }

  public function editRoles(Request $request)
  {
    if (!auth()->user()->can('roles_edit')) {
      return response()->json(['message' => 'Permisson Not Access'], 422);
    }
    $data = Role::find($request->id);

    if (!$data) {
      return response()->json(['message' => 'Data Tidak Tersedia'], 404);
    }

    return response()->json($data);
  }

  public function updateRoles(Request $request)
  {
    if (!auth()->user()->can('roles_edit')) {
      return response()->json(['message' => 'Permisson Not Access'], 422);
    }
    $rules = [
      'name' => 'required',
      'id_edit' => 'required',
    ];

    $validasi = Validator::make($request->all(), $rules);

    if ($validasi->fails()) {
      return response()->json(['message' => 'Data Gagal Di simpan', 'message' => $validasi->errors()->first()], 422);
    }

    $data = Role::find($request->id_edit);

    if (!$data) {
      return response()->json(['message' => 'Data Tidak Tersedia'], 404);
    }

    $data->update($request->all());

    return response()->json(['message' => 'Data Berhasil Di Update'], 200);
  }

  public function delRoles(Request $request)
  {
    if (!auth()->user()->can('roles_delete')) {
      return response()->json(['message' => 'Permisson Not Access'], 422);
    }
    $data = Role::find($request->id);

    if (!$data) {
      return response()->json(['message' => 'Data Tidak Tersedia'], 404);
    }
    $data->delete();
    return response()->json(['message' => 'Data Berhasil Di Hapus'], 200);
  }

  public function indexPermissions(Request $request)
  {
    if (!auth()->user()->can('permission_list')) {
      return redirect()->back()->with(['flash_message_error' => 'Not Access Permission']);
    }

    $perm = Permission::query();
    if ($request->ajax()) {
      return datatables()->of($perm)
        ->addColumn('aksi', function ($data) {
          $button = '<button class="btn btn-primary waves-effect waves-light btn-sm edit" id="' . $data->id . '" data-toggle="tooltip" data-placement="right" title="Edit Data Yang Anda Pilih"><i class="fas fa-edit"></i></button>';
          $button .= '<button class="btn btn-sm btn-danger ml-1 hapus" id="' . $data->id . '" name="hapus"><i class="fas fa-trash"></i></button>';
          return $button;
        })->rawColumns(['aksi'])
        ->make(true);
    }

    return view('admin.permissionRoles.permission.index');
  }


  public function addPermission(Request $request)
  {
    if (!auth()->user()->can('permission_add')) {
      return response()->json(['message' => 'Permisson Not Access'], 422);
    }

    $rules = [
      'name' => 'required',
    ];

    $validasi = Validator::make($request->all(), $rules);

    if ($validasi->fails()) {
      return response()->json(['message' => 'Data Gagal Di simpan', 'message' => $validasi->errors()->first()], 422);
    }

    Permission::create(['name' => $request->name, 'desc' => $request->desc, 'guard_name' => 'web']);

    return response()->json(['message' => 'Data Berhasil Di simpan'], 200);
  }

  public function editPermission(Request $request)
  {
    if (!auth()->user()->can('permission_edit')) {
      return response()->json(['message' => 'Permisson Not Access'], 422);
    }
    $data = Permission::find($request->id);

    if (!$data) {
      return response()->json(['message' => 'Data Tidak Tersedia'], 404);
    }

    return response()->json($data);
  }

  public function updatePermission(Request $request)
  {
    if (!auth()->user()->can('permission_edit')) {
      return response()->json(['message' => 'Permisson Not Access'], 422);
    }
    $rules = [
      'name' => 'required',
      'id_edit' => 'required',
    ];

    $validasi = Validator::make($request->all(), $rules);

    if ($validasi->fails()) {
      return response()->json(['message' => 'Data Gagal Di simpan', 'message' => $validasi->errors()->first()], 422);
    }

    $data = Permission::find($request->id_edit);

    if (!$data) {
      return response()->json(['message' => 'Data Tidak Tersedia'], 404);
    }

    $data->update($request->all());

    return response()->json(['message' => 'Data Berhasil Di Update'], 200);
  }

  public function delPermission(Request $request)
  {
    if (!auth()->user()->can('permission_delete')) {
      return response()->json(['message' => 'Permisson Not Access'], 422);
    }
    $data = Permission::find($request->id);

    if (!$data) {
      return response()->json(['message' => 'Data Tidak Tersedia'], 404);
    }
    $data->delete();
    return response()->json(['message' => 'Data Berhasil Di Hapus'], 200);
  }
}
