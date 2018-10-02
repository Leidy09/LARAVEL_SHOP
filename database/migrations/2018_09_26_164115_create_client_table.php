<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',45);
            $table->string('lastname',45);
            $table->integer('document',10);
            $table->string('address',45);
            $table->string('city', 45);
            $table->date('dateOfBirth');
            $table->string('email',50);
            $table->integer('phone', 10);
            $table->integer('Expiry_Month');
            $table->integer('Expiry_year');
            $table->integer('CCV',3);
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
        Schema::dropIfExists('client');
    }
}
