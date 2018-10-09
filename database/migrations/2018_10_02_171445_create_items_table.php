<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('price');
            $table->integer('idProduct');
            $table->integer('idOrder');
            $table->integer('quantity');
            $table->integer('iva');
            $table->timestamps();
        $table->foreign('idProduct')->references('id')->on('products');
        $table->foreign('idOrder')->refences('id')->on('orders');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
