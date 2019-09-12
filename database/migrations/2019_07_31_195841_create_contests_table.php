<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone_no');
            $table->string('whatsApp_no');
            $table->date('dob');
            $table->string('birthmonth');
            $table->string('contest_year');
            $table->string('gender');
            $table->string('state_of_res');
            $table->string('contest_image');
            $table->integer('contest_fee');
            $table->string('payment_receipt')->nullable();
            $table->string('pay_reference')->nullable();
            $table->string('referrer')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('contests');
    }
}
