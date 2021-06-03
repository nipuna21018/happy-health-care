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


Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::resource('pharmacies', 'Admin\PharmaciesController');
    Route::resource('patients', 'Admin\PatientsController');
    Route::resource('doctors', 'Admin\DoctorsController');
    Route::resource('doctor-specializations', 'Admin\DoctorSpecializationsController');
    Route::resource('prescriptions', 'Admin\PrescriptionsController');
});

Route::prefix('doctor')->middleware(['auth', 'role:doctor'])->group(function () {
    Route::get('/', 'Doctor\DashboardController@index')->name('doctor.dashboard');
});

Route::prefix('pharmacy')->middleware(['auth', 'role:pharmacist'])->group(function () {
    Route::get('/', 'Pharmacy\DashboardController@index')->name('pharmacy.dashboard');
});
