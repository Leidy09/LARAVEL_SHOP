<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $products = \App\product::all()->pluck('id')->toArray();
    return [
        //
        'route_image'=>$faker->text,
        'product_id'=>$faker->optional()->randomElement($products),

    ];
});
