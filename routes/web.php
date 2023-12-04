<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use Inertia\Inertia;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Login
Route::get('/', [LoginController::class, 'create'])->name('/');
Route::post('login', [LoginController::class, 'store'])->name('login');
// Logout
Route::post('logout', [LoginController::class, 'destroy'])->name('logout');

//user crete
Route::get('/users/create', function()
{
return Inertia::render('Create');
})->name('users.create');


Route::middleware('auth')->group(function () {
 //Dashboard
Route::get('/dashboard', function()
{
return Inertia::render('Dashboard');
});
//users list
Route::post('/users', [UsersController::class, 'store'])->name('users');
Route::get('/users/users', [UsersController::class, 'index'])->name('users.index');
//users edit
Route::get('/profile/edit', [UsersController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [UsersController::class, 'update'])->name('profile.update');
//users delete
Route::delete('users/destroy/{user}', [UsersController::class, 'destroy'])->name('users.destroy');
});