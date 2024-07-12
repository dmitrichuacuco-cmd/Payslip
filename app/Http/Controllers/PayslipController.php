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
    public function viewPayslipList(Employee $employee)
    {
        return view("payslip-list", ['id' => $employee->id, 'payslips' => $employee->payslips()->latest()->paginate(6)]);
    }

    public function payslipPage(Payslip $payslip)
    {
        return view('payslip-view', ['payslip' => $payslip]);
    }

    public function payslipFill(Employee $employee) {
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
        $incomingFields['user_id'] = auth()->id();  //gets logged in user id
        $incomingFields['employee_id'] = $request->id;  //gets employee id
        Payslip::create($incomingFields);
        return redirect('/employeeProfile/Admin');
    }

    public function viewPayslipPage(Payslip $payslip)
    {
        return view('payslipForm', ['payslip' => $payslip]);
    }

    public function print(Payslip $payslip)
    {
        //return Pdf::loadView('print', ['payslip' => $payslip])->download('print.pdf');
        return Pdf::loadView('print', ['payslip' => $payslip])->stream('print.pdf');
    }

}
