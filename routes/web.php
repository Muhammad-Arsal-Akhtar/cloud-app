<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Files\ShowFile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', Login::class)->name('login');

Route::get('/register', Register::class)->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('show-file/{fileid}', ShowFile::class)->name('show.file');
});