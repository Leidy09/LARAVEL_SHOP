<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $products = \App\product::all()->pluck('id')->toArray();
    return [
        //
        'datefrom'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'dateto'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'disscount'=>$faker->boolean,
        'product_id'=>$faker->optional()->randomElement($products),

    ];
});
