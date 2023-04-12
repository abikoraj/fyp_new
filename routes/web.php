<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Role
| 0 = Admin
| 1 = Receiver
| 2 = Donor
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::match(['get', 'post'], '/login', [UserController::class, 'login'])->name('login');
Route::match(['get', 'post'], 'register', [UserController::class, 'register'])->name('register');
Route::get('verify{phone}', [UserController::class, 'verify'])->name('verify');
Route::post('verified', [UserController::class, 'verified'])->name('verified');


Route::middleware(['role:0'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });
});

Route::middleware(['role:1'])->group(function () {
    Route::prefix('receiver')->name('receiver.')->group(function () {
        Route::get('/dashboard', function () {
            return view('receiver.dashboard');
        })->name('dashboard');
    });
});

Route::middleware(['role:2'])->group(function () {
    Route::prefix('donor')->name('donor.')->group(function () {
        Route::view('/dashboard', 'donor.dashboard')->name('dashboard');
        Route::view('/abc', 'welcome');
    });
});

Route::middleware(['role:0', 'role:1', 'role:2'])->group(function () {
});
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
