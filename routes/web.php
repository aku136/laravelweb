<?php

use App\Http\Controllers\ShelterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalenderController;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\RealtimeController;

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

// Route::get('/', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});

Route::get('home', function () {
    return view('home');
});

// routes shelter
Route::get('shelter', 'ShelterController@data');
Route::get('shelter/add', 'ShelterController@add');
Route::post('shelter', 'ShelterController@addProcess');
Route::get('shelter/edit/{id}', 'ShelterController@edit');
Route::patch('shelter/{id}', 'ShelterController@editProcess');
Route::delete('shelter/{id}', 'ShelterController@delete');

// routes profile
Route::get('profile', 'ProfileController@data');

// routes realtime
Route::get('realtime', 'RealtimeController@data');
Route::get('grafik','RealtimeController@chart');
Route::get('live','RealtimeController@live');
