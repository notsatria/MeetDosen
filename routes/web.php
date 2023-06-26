<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route untuk mahasiswa

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home");

Route::get('/home', 'App\Http\Controllers\HomeController@redirect')->middleware('auth', 'verified');


Route::get('/my-appointment', 'App\Http\Controllers\HomeController@myAppointment');

Route::get('/cancel-appointment/{id}', 'App\Http\Controllers\HomeController@cancelAppointment');

Route::get('/dosen-schedule', 'App\Http\Controllers\HomeController@showDosen');

Route::get('/dosen-schedule/{nama}', 'App\Http\Controllers\HomeController@dosenSchedule');

Route::post('/appointment', 'App\Http\Controllers\HomeController@appointment');


// Batas route untuk mahasiswa


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route untuk admin

Route::get('/add-dosen', 'App\Http\Controllers\AdminController@add');

Route::get('/show-dosen', 'App\Http\Controllers\AdminController@showDosen');

Route::get('/delete-dosen/{id}', 'App\Http\Controllers\AdminController@deleteDosen');

Route::get('/edit-dosen/{id}', 'App\Http\Controllers\AdminController@editDosen');

Route::post('/update-dosen/{id}', 'App\Http\Controllers\AdminController@updateDosen');

Route::post('/upload-dosen', 'App\Http\Controllers\AdminController@upload');

// Batas route untuk admin

// Route untuk dosen
Route::get('/show-appointment', 'App\Http\Controllers\DosenController@showAppointment');

Route::get('/approve/{id}', 'App\Http\Controllers\DosenController@approve');

Route::get('/cancel/{id}', 'App\Http\Controllers\DosenController@cancel');
