<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'periodStart',
        'periodEnd',
        'date',
        'employeeID',
        'job',
        'name',
        'department',
        'bankAccount',
        'salary',
        'overtime',
        'SSS',
        'philhealth',
        'pagibig',
        'wtax',
        'loans',
        'user_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'user_id');
    }
}
