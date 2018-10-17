<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $products = \App\product::all()->pluck('id')->toArray();
    $orders = \App\order::all()->pluck('id')->toArray();
    return [
        //
        'price'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL) ,
        'idProduct'=>$faker->optional()->randomElement($products),
        'idOrder'=>$faker->optional()->randomElement($orders),
        'quantity'=>$faker->randomNumber,
        'iva'=>$faker->randomNumber(2),
    ];
});
