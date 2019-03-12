<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('training_type_id');
            $table->integer('company_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->integer('employee_id');
            $table->longText('why_training_matters');
            $table->longText('recommended_courses');
            $table->enum('approval_status', ['Approved', 'Pending']);
            $table->string('training_start_date');
            $table->string('training_end_date');
            $table->enum('completed', ['Yes', 'No']);
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
        Schema::dropIfExists('training_registers');
    }
}
