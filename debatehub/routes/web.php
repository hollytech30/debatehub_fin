<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Appfaq;
use App\Livewire\UsersList;
use App\Livewire\RolesList;
use App\Livewire\PermissionsList;

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
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/faqs', Appfaq::class)->name('appfaq');
    Route::get('/users', UsersList::class)->name('users');
    Route::get('/roles', RolesList::class)->name('roles');
    Route::get('/permissions', PermissionsList::class)->name('permissions');
});
