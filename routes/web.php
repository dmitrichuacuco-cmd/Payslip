<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FillerController;

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


Route::get('/welcome', [FillerController::class, "fillValue"]);
Route::put('/', [FillerController::class, "actuallyUpdate"]);

Route::get('/invoice', [FillerController::class, "print"]);
Route::get('/layout', [FillerController::class, "saveValue"]);
