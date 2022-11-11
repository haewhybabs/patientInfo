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

Route::get('/', 'App\Http\Controllers\PatientController@index');
Route::post('/registration', 'App\Http\Controllers\PatientController@registration');

Route::group(['prefix'=>'admin','as'=>'admin'],function(){
    Route::get('/login','App\Http\Controllers\AuthController@loginRender')->name('admin');
    Route::post('/login','App\Http\Controllers\AuthController@login');
    Route::group(['middleware'=>'auth'],function(){
        Route::get('/dashboard','App\Http\Controllers\DashboardController@index');
        Route::get('/patients','App\Http\Controllers\PatientController@patients');
        Route::get('/patient','App\Http\Controllers\PatientController@patientDetails');
        Route::get('/patient/observations','App\Http\Controllers\ObservationController@observations');
        Route::post('/create-observation','App\Http\Controllers\ObservationController@create');

        Route::get('/doctors','App\Http\Controllers\DoctorController@index');
        Route::post('/users/add','App\Http\Controllers\DoctorController@add');
        Route::post('/users/update','App\Http\Controllers\DoctorController@update');
        Route::post('/users/delete','App\Http\Controllers\DoctorController@delete');
        Route::get('/logout','App\Http\Controllers\AuthController@logout');
    });
});
