<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('roles',RolesController::class);
    Route::post('/roles/{roleId}/rolepermission', [RolesController::class, 'storeRolePermission'])->name('roles.storeRolePermission');
    Route::get('/roles/{roleId}/rolepermission', [RolesController::class, 'addRolePermission'])->name('roles.addRolePermission');

    Route::resource('permissions',PermissionController::class);

    Route::resource('users',UserController::class);

    Route::post('/users/{userId}/roles', [RolesController::class, 'storeRoleToUser'])->name('users.storeRoleUser');
    Route::get('/users/{userId}/roles', [RolesController::class, 'addRoleToUser'])->name('users.addRoleUser');

    Route::post('/users/{userId}/permissions', [PermissionController::class, 'storePermissionToUser'])->name('users.storePermissionUser');
    Route::get('/users/{userId}/permissions', [PermissionController::class, 'addPermissionToUser'])->name('users.addPermissionUser');

    

});

require __DIR__.'/auth.php';
