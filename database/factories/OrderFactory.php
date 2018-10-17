<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    $users = \App\user::all()->pluck('id')->toArray();
    $pay_methods = \App\pamethody_::all()->pluck('id')->toArray();
    $post_office_providers = \App\post_office_provider::all()->pluck('id')->toArray();
    return [
        //
        'dataShoped'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'userIdUser'=>$faker->optional()->randomElement($users),
        'authotizationNumber'=>$faker->creditCardNumber,
        'idPayMethod'=>$faker->optional()->randomElement($pay_methods),
        'idPostofficeProvider'=>$faker->optional()->randomElement($post_office_providers),
        'tracing_Number'=>$faker->randomNumber(15),
        'post_Status'=>$faker->text(10),
    ];
});
