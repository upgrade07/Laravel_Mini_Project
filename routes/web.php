<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
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


Route::get('/login', function () {
    return view('login');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/list', [users::class,'list']);

Route::get('/home', [users::class,'home']);

Route::post('/login_submit', [users::class,'login_submit']);

Route::post('/create_submit', [users::class,'create_submit']);

