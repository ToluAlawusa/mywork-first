<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->integer('company_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->longText('lateness_reason')->nullable();
            $table->longText('location_reason')->nullable();
            $table->longText('location_reason_address')->nullable();
            $table->boolean('present')->nullable();
            //$table->longText('captured_location_address')->nullable();
            $table->string('clocked_in_time');
            $table->string('clocked_in_date');
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
        Schema::dropIfExists('attendances');
    }
}
