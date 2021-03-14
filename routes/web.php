<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
 */

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('CheckRole');
Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('CheckIfAdmin');
Route::get('dashboard/create', [AdminController::class, 'create'])->name('create')->middleware('CheckIfAdmin');
Route::post('dashboard/store', [AdminController::class, 'store'])->name('store')->middleware('CheckIfAdmin');

Route::get('/users/{user}/activate', [UserController::class, 'confirm'])->name('confirm')->middleware('SignedValidation');
Route::get('/users/{user}/newlink', [UserController::class, 'newLink'])->name('new-link')->middleware('CheckIfValidated');