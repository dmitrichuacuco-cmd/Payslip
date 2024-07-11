<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Payslip;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class PayslipController extends Controller
{
    public function viewPayslipList(Employee $pizza)
    {
        //return $pizza->payslips()->get();
        //return $pizza;
        //return $pizza->id;
        return view("payslip-list", ['id' => $pizza->id, 'payslips' => $pizza->payslips()->get()]);
    }

    public function payslipPage(Payslip $payslip)
    {
        //$payslips = $employee->payslips()->find($employee);
        //$payslips = $employee->payslips()->get('overtime');
        
        //return $payslips[1];
        //return $payslip;
        return view('payslip-view', ['payslip' => $payslip]);
    }

    public function payslipFill(Employee $employee) {
        //return $employee;
        return view('payslipDetails', ['employee' => $employee]);
    }

    public function payslipSaveInfo(Request $request)
    {
        $incomingFields = $request->validate([
            'periodStart' => 'required',
            'periodEnd' => 'required',
            'date' => 'required',
            'employeeID' => 'required',
            'job' => 'required',
            'name' => 'required',
            'department' => 'required',
            'bankAccount' => 'required',
            'salary' => 'required',
            'overtime' => 'required',
            'SSS' => 'required',
            'philhealth' => 'required',
            'pagibig' => 'required',
            'wtax' => 'required',
            'loans' => 'required',
        ]);
        $employee = auth()->user()->employees()->get();
        //$employee = auth()->user()->employees()->pluck('id');
        //$employee = auth()->user()->employees()->find($request)->pluck('id');
        //$employee = DB::select('SELECT * FROM employees');
        $incomingFields['user_id'] = auth()->id();
        $incomingFields['employee_id'] = 3;
        //$incomingFields['employee_id'] = $this->id();
        //$incomingFields['employee_id'] = auth()->employee()->id();
        //Payslip::create($incomingFields);
        return $employee;
        //return redirect('/employeeProfile/Admin');
    }

    public function viewPayslipPage(Payslip $payslip)
    {
        return view('payslipForm', ['payslip' => $payslip]);
    }

    public function print(Payslip $payslip)
    {
        return Pdf::loadView('print', ['payslip' => $payslip])->download('print.pdf');
        return view('payslip-view', ['payslip' => $payslip]);
    }

}
