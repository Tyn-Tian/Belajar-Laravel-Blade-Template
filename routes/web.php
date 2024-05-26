<?php

use Illuminate\Http\Request;
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

Route::get('/hello', function () {
    return view('hello', ['name' => 'Laravel']);
});

Route::get('/world', function () {
    return view('hello.world', ['name' => 'Laravel']);
});

Route::get('/html-encoding', function (Request $request) {
    return view('html-endocing', ['name' => $request->input('name')]);
});