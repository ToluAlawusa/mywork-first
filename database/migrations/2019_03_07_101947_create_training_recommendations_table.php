<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_recommendations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('training_type_id');
            $table->integer('company_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->integer('employee_id');
            $table->longText('recommendation_note');
            $table->string('recommended_by');
            $table->string('date_of_recommendation');
            $table->string('awaiting_approval_from');
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
        Schema::dropIfExists('training_recommendations');
    }
}
