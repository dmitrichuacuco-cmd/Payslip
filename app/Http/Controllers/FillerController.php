<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class FillerController extends Controller
{
    public function fillValue()
    {
        return view('welcome');
    }

    public function saveValue(User $user, Request $request)
    {
        $incomingFields = $request->validate([
            'start' => 'required',
            'end' => 'required',
            'date' => 'required',

            'employeeID' => 'required',
            'name' => 'required',
            'bankAccount' => 'required',
            'post' => 'required',
            'department' => 'required',

            'Salary' => 'required',
            'Overtime' => 'required',
            'SSS' => 'required',
            'Philhealth' => 'required',
            'Wtax' => 'required',
            'Loans' => 'required'
        ]);
        $user->update($incomingFields);
        return "success!";
    }

    public function print(Request $request)
    {
        // return ($request->Salary);
        $request = ['requests' => $request->all()];
        $pdf = Pdf::loadView('pdf.invoice', $request);
        return $pdf->download('invoice.pdf');
    }
}
