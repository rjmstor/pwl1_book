<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    return view("mahasiswa");
});

Route::get('/dosen', function () {
    return "hello pak";
});

Route::get('/dosen', function () {
    return view("dosen");
});

Route::get('dosen',[\App\Http\Controllers\DosenController::class, 'index']);
