<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, "welcome"]);

Route::get('/register', [UserController::class, "registerPage"]);
Route::post('/checkRegister', [UserController::class, "checkRegisterPage"]);
Route::get('/login', [UserController::class, "loginPage"]);
Route::post('/checkLogin', [UserController::class, "checkLoginPage"]);
Route::post('/logout', [UserController::class, "logoutPage"]);

Route::get('/employee', [UserController::class, "employeePage"]);
Route::post('/checkEmployee', [UserController::class, "checkEmployeePage"]);
Route::get('/employeeDetails', [UserController::class, "employeeDetailsPage"]);
