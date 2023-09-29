<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceDataController;

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

Route::view('/about', 'about');
Route::view('/admin', 'admin');
Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');
Route::get('/device', [DeviceDataController::class, 'device_details'])->name('device');
Route::post('/edit-note/{id}',[NotesController::class,'update'])->name('notes.edit');
Route::view('/edit-profile', 'edit-profile');

// Sensor
Route::view('/temperature-chilled-water', 'sensor.chilled-water');
Route::view('/temperature-cooling-water', 'sensor.cooling-water');
Route::view('/condenser-pressure', 'sensor.condenser');
Route::view('/evaporator-pressure', 'sensor.evaporator');
Route::view('/oil-tank', 'sensor.oil-tank');
Route::view('/oil-capacity', 'sensor.oil-capacity');
Route::view('/oil-pressure', 'sensor.oil-pressure');
Route::view('/vane-position', 'sensor.vane-position');
Route::view('/main-motor-current', 'sensor.main-motor-current');

Route::get('/', [DeviceDataController::class, 'show_dashboard']);
