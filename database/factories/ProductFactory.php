<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $categories = \App\category::all()->pluck('id')->toArray();
    return [
        //
        'name'=>$faker->name,
        'description'=>$faker->text(250),
        'size'=>$faker->text(45),
        'visible'=>$faker->boolean,
        'category_id'=>$faker->optional()->randomElement($categories),
        'price'=>$faker->randomNumber(6),
        'iva'=>$faker->randomNumber(5),
    ];
});
