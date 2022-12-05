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

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('shape', function () {
    return view('shape');
});

Route::get('circle', function () {
    return view('circle');
});

Route::get('squre', function () {
    return view('squre');
});

Route::get('trangle', function () {
    return view('trangle');
});

Route::get('rectrangle', function () {
    return view('rectrangle');
});

Route::get('cylinder', function () {
    return view('cylinder');
});

Route::get('cube', function () {
    return view('cube');
});

Route::get('cuboid', function () {
    return view('cuboid');
});

Route::get('pyramid', function () {
    return view('pyramid');
});