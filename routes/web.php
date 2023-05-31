<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\User\ShowUserListViewController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('repositories', fn() => redirect('repositories/users'));

Route::get('repositories/users', ShowUserListViewController::class)->name('user:list');
