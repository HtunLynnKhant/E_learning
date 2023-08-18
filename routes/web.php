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
    return view('frontend.index');
});
Route::get('/header', function () {
    return view('frontend.header');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/footer', function () {
    return view('frontend.footer');
});
Route::get('/login', function () {
    return view('frontend.login');
});
Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});
Route::get('/service', function () {
    return view('frontend.service');
});
Route::get('/course', function () {
    return view('frontend.course');
});
Route::get('/course1',function(){
    return view('frontend.course1');
});
