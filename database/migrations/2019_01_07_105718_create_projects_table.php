<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('company_id')->nullable();;
            $table->integer('branch_id')->nullable();;
            $table->integer('client_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('rate');
            $table->string('rate_type');
            $table->string('priority');
            $table->integer('project_leader');
            $table->longtext('project_team');
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
        Schema::dropIfExists('projects');
    }
}
