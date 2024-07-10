<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Payslip;
use App\Models\Employee;
use Illuminate\Http\Request;

class PayslipController extends Controller
{
    public function viewPayslipList(Employee $pizza)
    {
        //return $pizza->payslips()->get();
        //return $pizza;
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
        //$employee = auth()->user()->employees()->pluck('id');
        $employee = auth()->user()->employees()->find($incomingFields);
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

    public function print()
    {
        return Pdf::loadView('print')->download('print.pdf');
    }

}
