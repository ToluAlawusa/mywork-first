<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ticket_id');
            $table->integer('company_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->string('subject');
            $table->enum('status', ['Open', 'Answered', 'Closed']);
            $table->string('department');
            $table->enum('priority', ['Low', 'Medium', 'High']);
            $table->timestamp('date');
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
        Schema::dropIfExists('support_tickets');
    }
}
