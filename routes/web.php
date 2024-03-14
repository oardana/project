<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\ControllerRegistration;
use App\Http\Controllers\ControllerMember;
use App\Http\Controllers\ControllerVehicle;
use App\Http\Controllers\ControllerVehicleType;
use App\Http\Controllers\ControllerPayment;
use App\Http\Controllers\ControllerMembership;


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

Route::get('/login',[ControllerLogin::class,'index'])->middleware('guest');
Route::post('/login',[ControllerLogin::class,'authenticate']);
Route::get('/registration',[ControllerRegistration::class,'index']);
Route::post('/registration',[ControllerRegistration::class,'store']);
Route::resource('member',ControllerMember::class)->middleware('member');
Route::get('/logout',[ControllerLogin::class,'logout']);
Route::get('/',[ControllerLogin::class,'index']);
Route::resource('vehicle', ControllerVehicle::class)->middleware('vehicle');
Route::resource('payment', ControllerPayment::class)->middleware('payment');
Route::resource('membership', ControllerMembership::class);
Route::resource('vehicletype', ControllerVehicleType::class);


