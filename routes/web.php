<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PermissionAndRoleController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|p
*/

Route::get('/', function () {
  return view('welcome');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::prefix('administrator')->group(function () {
  Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'viewDashboard']);

    // Setting Permision dan Role
    Route::get('/roles', [PermissionAndRoleController::class, 'index']);
    Route::post('/roles/add', [PermissionAndRoleController::class, 'addRoles']);
    Route::post('/roles/edit', [PermissionAndRoleController::class, 'editRoles']);
    Route::post('/roles/update', [PermissionAndRoleController::class, 'updateRoles']);
    Route::post('/roles/del', [PermissionAndRoleController::class, 'delRoles']);


    Route::get('/permissions', [PermissionAndRoleController::class, 'indexPermissions']);
    Route::post('/permissions/add', [PermissionAndRoleController::class, 'addPermission']);
    Route::post('/permissions/edit', [PermissionAndRoleController::class, 'editPermission']);
    Route::post('/permissions/update', [PermissionAndRoleController::class, 'updatePermission']);
    Route::post('/permissions/del', [PermissionAndRoleController::class, 'delPermission']);

    // Users
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users/add', [UserController::class, 'addUser']);
    Route::post('/users/edit', [UserController::class, 'editUser']);
    Route::post('/users/update', [UserController::class, 'updateUser']);
    Route::post('/users/del', [UserController::class, 'delUser']);
    Route::get('/users/detail/{id}', [UserController::class, 'detailUser']);
  });
});


require __DIR__ . '/auth.php';
