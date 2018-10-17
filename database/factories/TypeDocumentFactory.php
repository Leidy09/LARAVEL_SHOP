<?php

use Faker\Generator as Faker;

$factory->define(App\TypeDocument::class, function (Faker $faker) {
    return [
        //
        'first_name'=>$faker->name,
        'abbreviation'=>$faker->text(3),

    ];
});
