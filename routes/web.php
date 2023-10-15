<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceDataController;
use App\Http\Controllers\LogSheetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/about', 'about')->middleware('auth');
Route::view('/admin', 'admin')->middleware('auth');
Route::get('/device', [DeviceDataController::class, 'device_details'])->name('device')->middleware('auth');
Route::post('/edit-note/{id}', [NotesController::class,'update'])->name('notes.edit')->middleware('auth');
Route::view('/edit-profile', 'edit-profile')->middleware('auth');
Route::view('/profile', 'profile')->middleware('auth');

// Sensor
Route::view('/temperature-chilled-water', 'sensor.chilled-water')->middleware('auth');
Route::view('/temperature-cooling-water', 'sensor.cooling-water')->middleware('auth');
Route::view('/condenser-pressure', 'sensor.condenser')->middleware('auth');
Route::view('/evaporator-pressure', 'sensor.evaporator')->middleware('auth');
Route::view('/oil-tank', 'sensor.oil-tank')->middleware('auth');
Route::view('/oil-capacity', 'sensor.oil-capacity')->middleware('auth');
Route::view('/oil-pressure', 'sensor.oil-pressure')->middleware('auth');
Route::view('/vane-position', 'sensor.vane-position')->middleware('auth');
Route::view('/main-motor-current', 'sensor.main-motor-current')->middleware('auth');

Route::get('/', [LogSheetController::class, 'show'])->middleware('auth');


Route::get('/sign-in', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/sign-in', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/sign-up', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/sign-up', [RegisterController::class, 'store']);