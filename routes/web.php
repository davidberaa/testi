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
    return '<a href="/food">burgerebi1</a> <a href="/test">burgerebi2</a>';
});

Route::get('/food', function () {

    $show = DB::table('food')->get();

    return view('food', ['show' => $show]);
});