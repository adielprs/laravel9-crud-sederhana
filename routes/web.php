<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RplController;

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
    return view('home');
});

Route::get('login', function () {
    return view('login');
});

Route::get('regis', function () {
    return view('regis');
});


// tampilan table login
Route::get('/tablelog', [RplController::class, 'index']);

// tampilan table regis
Route::get('/tablereg', [RplController::class, 'dexin']);

//  tampilan view login
Route::get('/login',[RplController::class, 'login']);

// action view login
Route::post('/login/view', [RplController::class, 'store']);

// tampilan view regis
Route::get('/regis',[RplController::class, 'regis']);

// action view regis
Route::post('/regis/view', [RplController::class, 'reggin']);