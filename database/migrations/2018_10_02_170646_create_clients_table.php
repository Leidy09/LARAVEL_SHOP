<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',45);
            $table->string('last_name',45);
            $table->integer('document');
            $table->string('address',45);
            $table->string('city', 45);
            $table->date('date_Of_Birth');
            $table->string('email',50)->unique();
            $table->integer('phone');
            $table->integer('Expiry_Month');
            $table->integer('Expiry_year');
            $table->integer('CCV');
            $table->integer('idTipoDocuement_idDocument');
            $table->integer('userId_idDocument');
            $table->timestamps();

            $table->foreign('idTipoDocuement_idDocument')->references('id')->on('type_documnts');
            $table->foreign('userId_idDocument')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
