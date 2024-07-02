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
//Route::get('/employeeDetails', [UserController::class, "employeeDetailsPage"]);
Route::get('/employeeDetails/{employee}', [UserController::class, "viewDetailsPage"]);
Route::delete('/employeeDetails/{employee}', [UserController::class, "delete"]);
Route::get('/employeeDetails/{employee}/edit', [UserController::class, "showEditPage"]);
Route::put('/employeeDetails/{employee}', [UserController::class, "updatePage"]);

//Route::put("/updateEmployee", [UserController::class,"updateEmployeePage"]);
Route::get('/employeeProfile/{employeeName:name}', [UserController::class, "viewEmployeeProfile"]);

Route::get('/inventory', [UserController::class, "inventoryPage"]);
Route::post('/checkInventory', [UserController::class, "checkInventoryPage"]);
