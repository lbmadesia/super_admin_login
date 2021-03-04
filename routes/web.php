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

Route::get('/','admin@result');

// start route access login page for both as super admin and staff 
Route::get('/login','admin@result');
Route::get('/signin','admin@result');
Route::get('/employee','admin@result');
// end route access login page for both as super admin and staff 
Route::post('/logindata','auth@adminlogin');
Route::post('/signindata','auth@stafflogin');
Route::get('/hrm', function () {
    return view('hrm.index');
});
Route::get('/404', function () {
    return view('notfound');
});
Route::get('/error', function () {
    return view('error');
});