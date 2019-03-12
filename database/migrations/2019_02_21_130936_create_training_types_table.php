<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('training_code');
            $table->integer('company_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->integer('training_location_id');
            $table->string('name');
            $table->string('duration')->nullable();
            $table->enum('certification', ['Yes', 'No']);
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
        Schema::dropIfExists('training_types');
    }
}
