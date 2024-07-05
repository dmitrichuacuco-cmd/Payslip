<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payslips', function (Blueprint $table) {
            $table->id();
            $table->string('periodStart');
            $table->string('periodEnd');
            $table->string('date');
            $table->string('employeeID');
            $table->string('job');
            $table->string('name');
            $table->string('department');
            $table->string('bankAccount');
            $table->string('salary');
            $table->string('overtime');
            $table->string('SSS');
            $table->string('philhealth');
            $table->string('pagibig');
            $table->string('wtax');
            $table->string('loans');
            $table->foreignId('user_id')->constrained();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payslips');
    }
};
