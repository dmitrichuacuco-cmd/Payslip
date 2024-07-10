<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Models\inventory;
use App\Models\Payslip;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }
    public function registerPage()
    {
        return view('register');
    }
    public function checkRegisterPage(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        User::create($incomingFields);
        return redirect('/');
    }

    public function loginPage()
    {
        return view('login');
    }

    public function checkLoginPage(Request $request)
    {
        $incomingFields = $request->validate([
            'loginName' => 'required',
            'loginPassword' => 'required'
        ]);
        if (auth()->attempt(['name' => $request['loginName'], 'password' => $request['loginPassword']])) {
            //keeps you logged in via cookie
            $request->session()->regenerate();
            return redirect('/');
        } else {
            return redirect('/')->with('error', 'not logged in');
        }
    }

    public function logoutPage()
    {
        //logs user out
        auth()->logout();
        return redirect('/');
    }

    public function homePage()
    {
        return view('welcome');
    }
    public function menuPage()
    {
        return view('menu');
    }

    public function employeePage()
    {
        return view('employee');
    }
    public function checkEmployeePage(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'department' => 'required',
            'job' => 'required',
            'salary' => 'required',
            'idNumber' => 'required'
        ]);
        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['department'] = strip_tags($incomingFields['department']);
        $incomingFields['job'] = strip_tags($incomingFields['job']);
        $incomingFields['salary'] = strip_tags($incomingFields['salary']);
        $incomingFields['idNumber'] = strip_tags($incomingFields['idNumber']);
        $incomingFields['user_id'] = auth()->id();

        Employee::create($incomingFields);
        //$incomingFields['department'] = strip_tags($incomingFields['department']);
        return redirect('/');
    }



    public function viewDetailsPage(Employee $employee)
    {
        //$employee = Employee::with('payslips')->get();
        //$number = $employee[0]['id'];
        //return $employee[$number-1]['payslips'][$number]['bankAccount'];
        //eturn $employee;
        return view('employeeDetails', ['employee' => $employee]);
    }

    public function delete(Employee $employee)
    {
        $employee->delete();
        return redirect('/employeeProfile/Admin');
    }

    public function updatePage(Employee $employee, Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'department' => 'required',
            'job' => 'required',
            'salary' => 'required',
            'idNumber' => 'required'
        ]);
        //strip_tags so users cant send scripts via submission forms
        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['department'] = strip_tags($incomingFields['department']);
        $incomingFields['job'] = strip_tags($incomingFields['job']);
        $incomingFields['salary'] = strip_tags($incomingFields['salary']);
        $incomingFields['idNumber'] = strip_tags($incomingFields['idNumber']);
        $incomingFields['user_id'] = auth()->id();

        $employee->update($incomingFields);
        return redirect('/employeeProfile/Admin');
    }

    public function showEditPage(Employee $employee)
    {
        return view('edit-employee', ['employee' => $employee]);
    }

    public function inventoryPage()
    {
        return view('inventory');
    }
    public function checkInventoryPage(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'barcodeNumber' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        inventory::create($incomingFields);
        return "Success";
    }

    public function viewEmployeeProfile(User $employeeName)
    {
        return view("profileList", ['name' => $employeeName->name, 'employees' => $employeeName->employees()->get()]);
    }


}
