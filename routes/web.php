<?php

use App\Http\Livewire\AdminDashboard;
use App\Http\Livewire\UserDashboard;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('role.redirect:admin,user');

    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
    });

    Route::middleware(['auth', 'role:user'])->group(function () {
        Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');
    });
});
