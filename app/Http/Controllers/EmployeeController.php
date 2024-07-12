<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Models\inventory;
use App\Models\Payslip;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
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

    public function viewEmployeeProfile(User $employeeName)
    {
        return view("profileList", ['name' => $employeeName->name, 'employees' => $employeeName->employees()->paginate(5)]);
    }
}
