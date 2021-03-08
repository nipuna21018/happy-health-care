<?php

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
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/search-doctors', function () {
    return view('search');
})->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin/doctors', 'Admin\DoctorsController');