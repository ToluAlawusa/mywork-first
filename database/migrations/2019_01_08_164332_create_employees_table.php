<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('designation_id');
            $table->boolean('status')->default();
            $table->integer('company_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->text('birth_date')->nullable();
            $table->enum('gender',['Male','Female'])->nullable();
            $table->string('image')->nullable();
            $table->text('address')->nullable();
            $table->string('state')->nullable();
            $table->text('country')->nullable();
            $table->integer('pin_code')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('email_address')->nullable();
            $table->text('institution')->nullable();
            $table->text('course')->nullable();
            $table->text('starting_date')->nullable();
            $table->text('complete_date')->nullable();
            $table->text('degree')->nullable();
            $table->text('grade')->nullable();
            $table->text('company_name')->nullable();
            $table->text('location')->nullable();
            $table->string('job_position')->nullable();
            $table->text('period_from')->nullable();
            $table->text('period_to')->nullable();
            $table->text('account_holder_name')->nullable();
            $table->text('account_number')->nullable();
            $table->text('bank_name')->nullable();
            $table->text('ifsc_code')->nullable();
            $table->text('pan_number')->nullable();
            $table->text('branch')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
