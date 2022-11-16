<?php

use App\Http\Controllers\PhoneController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
 Route::get('/',[PhoneController::class,'index'])->name('phone.index');
 Route::get('/create',[PhoneController::class,'create'])->name('phone.create');
 Route::post('/store',[PhoneController::class,'store'])->name('phone.store');
