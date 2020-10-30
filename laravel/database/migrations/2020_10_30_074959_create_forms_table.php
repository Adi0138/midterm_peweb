<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('IDCustomer');
            $table->string('Name');
            $table->string('Email');
            $table->string('Address');
            $table->string('PhoneNumber');
            $table->string('TypeOfRoom');
            $table->string('CheckIn');
            $table->string('CheckOut');
            $table->string('PaymentMethod');
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
        Schema::dropIfExists('forms');
    }
}
