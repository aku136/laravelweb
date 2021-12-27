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

Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

// Route::get('shelter', [ShelterController::class, 'data'])->name('shelter');
Route::get('shelter', 'ShelterController@data');
Route::get('shelter/add', 'ShelterController@add');
Route::post('shelter', 'ShelterController@addProcess');
Route::get('shelter/edit/{id}', 'ShelterController@edit');
Route::patch('shelter/{id}', 'ShelterController@editProcess');
Route::delete('shelter/{id}', 'ShelterController@delete');
Route::get('profile', 'ProfileController@data');
// Route::get('realtime', [RealtimeController::class, 'data']);
// Route::get('jajal','RealtimeController@data');
Route::get('realtime','RealtimeController@data');
Route::get('realtime/live','RealtimeController@live');
