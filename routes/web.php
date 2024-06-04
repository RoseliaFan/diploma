<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

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

Route::get('/list', function () {
    return view('list');
});

Route::get('/info1', function () {
    return view('/info1');
});
Route::get('/info2', function () {
    return view('/info2');
});
Route::get('/info3', function () {
    return view('/info3');
});
Route::get('/info4', function () {
    return view('/info4');
});
Route::get('/info5', function () {
    return view('/info5');
});
Route::get('/info6', function () {
    return view('/info6');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/contact', function () {
    return view('contactinformation');
});