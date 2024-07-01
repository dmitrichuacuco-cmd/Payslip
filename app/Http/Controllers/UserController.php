<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\employee;
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
            return "Unsuccessful";
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
        employee::create($incomingFields);
        return redirect('/');
    }

    public function employeeDetailsPage()
    {
        return view('employeeDetails');
    }
}
