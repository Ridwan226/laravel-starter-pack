<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PermissionAndRoleController;
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
  Route::get('/dashboard', [DashboardController::class, 'viewDashboard']);

  // Setting Permision dan Role
  Route::get('/roles', [PermissionAndRoleController::class, 'index']);
  Route::post('/roles/add', [PermissionAndRoleController::class, 'addRoles']);
  Route::post('/roles/edit', [PermissionAndRoleController::class, 'editRoles']);
  Route::post('/roles/update', [PermissionAndRoleController::class, 'updateRoles']);
  Route::post('/roles/del', [PermissionAndRoleController::class, 'delRoles']);


  Route::get('/permissions', [PermissionAndRoleController::class, 'indexPermissions']);
});


require __DIR__ . '/auth.php';
