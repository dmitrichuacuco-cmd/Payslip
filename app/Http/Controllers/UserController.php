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

    
    //not used
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

    


}
