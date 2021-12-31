<?php

use App\Http\Controllers\ShelterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalenderController;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\RealtimeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
// Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('home', function () {
//     return view('home');
// });

// Route::get('shelter', [ShelterController::class, 'data'])->name('shelter');
Route::get('shelter', 'ShelterController@data');
Route::get('shelter/add', 'ShelterController@add');
Route::post('shelter', 'ShelterController@addProcess');
Route::get('shelter/edit/{id}', 'ShelterController@edit');
Route::patch('shelter/{id}', 'ShelterController@editProcess');
Route::delete('shelter/{id}', 'ShelterController@delete');

Route::get('profile', 'ProfileController@data');
Route::get('realtime', 'RealtimeController@data');
Route::get('realtime/live', 'RealtimeController@live');
