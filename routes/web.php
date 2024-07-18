<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\EmployeeController;

//welcome page
Route::get('/', [UserController::class, "welcome"]);
Route::get('/register', [UserController::class, "registerPage"]);
Route::post('/checkRegister', [UserController::class, "checkRegisterPage"]);
Route::get('/login', [UserController::class, "loginPage"]);
Route::post('/checkLogin', [UserController::class, "checkLoginPage"]);
Route::post('/logout', [UserController::class, "logoutPage"]);
Route::get('/sample', [UserController::class, "samplePrint"]);

//employees
Route::get('/employee', [EmployeeController::class, "employeePage"]);   //go to create employee
Route::post('/checkEmployee', [EmployeeController::class, "checkEmployeePage"]);    //submit user input to database
Route::get('/employeeProfile/{employeeName:name}', [EmployeeController::class, "viewEmployeeProfile"]); //view list of employees
Route::get('/employeeDetails/{employee}', [EmployeeController::class, "viewDetailsPage"]);  //view each employee info 
Route::get('/employeeDetails/{employee}/edit', [EmployeeController::class, "showEditPage"]);    // go to edit form
Route::put('/employeeDetails/{employee}', [EmployeeController::class, "updatePage"]);   //push edited data to database
Route::delete('/employeeDetails/{employee}', [EmployeeController::class, "delete"]);    //delete data from database

//inventories (not used)
Route::get('/inventory', [UserController::class, "inventoryPage"]);
Route::post('/checkInventory', [UserController::class, "checkInventoryPage"]); 

//payslips (not complete)
Route::get('/payslip/{employee:id}', [PayslipController::class, "viewPayslipList"]);  //view list of employees
Route::get('/payslipView/{payslip}', [PayslipController::class, "payslipPage"]);   //view payslip details form database
Route::get('/payslipDetails/{employee}', [PayslipController::class, "payslipFill"]); //get employee data and fill payslip 
Route::post('/payslipSave/{id}', [PayslipController::class, "payslipSaveInfo"]);    //save payslip info to database
Route::get('/payslipForm/{info}', [PayslipController::class, "viewPayslipPage"]);  //view payslip info 

Route::get('/pdf/{payslip}', [PayslipController::class, "print"]); //prints
