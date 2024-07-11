<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PayslipController;

//welcome page
Route::get('/', [UserController::class, "welcome"]);
Route::get('/register', [UserController::class, "registerPage"]);
Route::post('/checkRegister', [UserController::class, "checkRegisterPage"]);
Route::get('/login', [UserController::class, "loginPage"]);
Route::post('/checkLogin', [UserController::class, "checkLoginPage"]);
Route::post('/logout', [UserController::class, "logoutPage"]);

//employees
Route::get('/employee', [UserController::class, "employeePage"]);   //go to create employee
Route::post('/checkEmployee', [UserController::class, "checkEmployeePage"]);    //submit user input to database
Route::get('/employeeProfile/{employeeName:name}', [UserController::class, "viewEmployeeProfile"]); //view list of employees
Route::get('/employeeDetails/{employee}', [UserController::class, "viewDetailsPage"]);  //view each employee info 
Route::get('/employeeDetails/{employee}/edit', [UserController::class, "showEditPage"]);    // go to edit form
Route::put('/employeeDetails/{employee}', [UserController::class, "updatePage"]);   //push edited data to database
Route::delete('/employeeDetails/{employee}', [UserController::class, "delete"]);    //delete data from database

//inventories (not complete)
Route::get('/inventory', [UserController::class, "inventoryPage"]);
Route::post('/checkInventory', [UserController::class, "checkInventoryPage"]);

//payslips (not complete)
Route::get('/payslip/{pizza:id}', [PayslipController::class, "viewPayslipList"]);  //view list of employees
Route::get('/payslipView/{payslip}', [PayslipController::class, "payslipPage"]);   //view payslip details form database
Route::get('/payslipDetails/{employee}', [PayslipController::class, "payslipFill"]); //get employee data and fill payslip 
Route::post('/payslipSave', [PayslipController::class, "payslipSaveInfo"]);    //save payslip info to database
Route::get('/payslipForm/{info}', [PayslipController::class, "viewPayslipPage"]);  //view payslip info 

Route::get('/pdf/{payslip}', [PayslipController::class, "print"]); //prints
