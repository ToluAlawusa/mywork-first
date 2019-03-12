<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayslipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->string('payslip_unique_id');
            $table->integer('company_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->string('paye_tax');
            $table->string('absent_days')->nullable();
            $table->string('total_earnings');
            $table->string('total_deductions');
            $table->string('net_salary');
            $table->string('month_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payslips');
    }
}
