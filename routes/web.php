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


Route::get('/', [LoginController::class, 'create'])->name('/');
Route::post('login', [LoginController::class, 'store'])->name('login');
Route::post('logout', [LoginController::class, 'destroy'])->name('logout');


Route::get('/users/create', function()
{
return Inertia::render('Create');
})->name('users.create');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function()
{
return Inertia::render('Dashboard');
});
Route::post('/users', [UsersController::class, 'store']);
Route::get('/users/users', [UsersController::class, 'index'])->name('users.index');


});