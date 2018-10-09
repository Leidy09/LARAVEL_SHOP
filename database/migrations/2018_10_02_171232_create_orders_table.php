<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dataShoped');
            $table->integer('userIdUser');
            $table->string('authotizationNumber',100);
            $table->integer('idPayMethod');
            $table->integer('idPostofficeProvider');
            $table->string('tracing_Number',45);
            $table->string('post_Status',45);
            $table->timestamps();

            $table->foreign('userId_user')->references('id')->on('users');
            $table->foreign('idPayMethod')->references('id')->on('pay_methods');
            $table->foreign('idPostOficceProvider')->references('id')->on('post_office_providers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
