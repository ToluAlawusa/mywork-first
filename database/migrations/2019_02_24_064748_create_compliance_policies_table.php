<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompliancePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compliance_policies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('policy_name');
            $table->integer('company_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->string('files')->nullable();
            $table->enum('by_who', ['A', 'U']);
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
        Schema::dropIfExists('compliance_policies');
    }
}
