<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeFinancialDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_financial_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->integer('company_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->string('basic_salary');
            $table->string('housing')->nullable();
            $table->string('transport')->nullable();
            $table->string('utility')->nullable();
            $table->string('entertainment')->nullable();
            $table->string('meal')->nullable();
            $table->string('gross_salary_monthly')->nullable();
            $table->string('gross_salary_yearly')->nullable();
            $table->string('pension')->nullable();
            $table->string('nhf')->nullable();
            $table->string('nhis')->nullable();
            $table->string('leave_allowance')->nullable();
            $table->string('thirteenth_month')->nullable();
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
        Schema::dropIfExists('employee_financial_datas');
    }
}
