<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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


//Route::view('/', 'index');

Route::view('/', 'pages.index');

//Route::get('/', [userController::class, 'getAll']);

Route::get('/welcome', [userController::class, 'getUsers']);

Route::get('/users', [userController::class, 'getUsers']);

Route::get('/users', [userController::class, 'login']);

/* Utilitzant regex per validar les dades que pasen per la url
Route::get('/user/{name}', function($name) {

})->where('name', '[A-Za-z]+');
*/
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
