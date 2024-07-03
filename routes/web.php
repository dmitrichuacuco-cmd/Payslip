<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//welcome page
Route::get('/', [UserController::class, "welcome"]);
Route::get('/register', [UserController::class, "registerPage"]);
Route::post('/checkRegister', [UserController::class, "checkRegisterPage"]);
Route::get('/login', [UserController::class, "loginPage"]);
Route::post('/checkLogin', [UserController::class, "checkLoginPage"]);
Route::post('/logout', [UserController::class, "logoutPage"]);

//employees
Route::get('/employee', [UserController::class, "employeePage"]);
Route::post('/checkEmployee', [UserController::class, "checkEmployeePage"]);
Route::get('/employeeProfile/{employeeName:name}', [UserController::class, "viewEmployeeProfile"]); //view list of employees
Route::get('/employeeDetails/{employee}', [UserController::class, "viewDetailsPage"]);  //view each employee info 
Route::get('/employeeDetails/{employee}/edit', [UserController::class, "showEditPage"]);    // go to edit form
Route::put('/employeeDetails/{employee}', [UserController::class, "updatePage"]);   //push edited data to database
Route::delete('/employeeDetails/{employee}', [UserController::class, "delete"]);    //delete data from database

//inventories (not complete)
Route::get('/inventory', [UserController::class, "inventoryPage"]);
Route::post('/checkInventory', [UserController::class, "checkInventoryPage"]);

//payslips (not complete)
Route::get('/payslip/{employeeName:name}', [UserController::class, "viewPayslipList"]);  //view list of employees
Route::get('/payslipDetails/{employee}', [UserController::class, "payslipPage"]);
