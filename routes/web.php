<?php

// use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', 'PagesController@home')->name('home');
Route::get('admin/dashboard', 'PagesController@adminDashboard')->name('admin.dashboard')->middleware('is_admin');

// Profile routes
Route::get('/dashboard', 'PagesController@dashboard');

// Dashboard routes
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/doctor', 'DoctorController@index')->name('doctor')->middleware('doctor');
Route::get('/patient', 'PatientController@index')->name('patient')->middleware('patient');