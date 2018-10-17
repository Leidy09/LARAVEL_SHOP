<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    $type_documents = \App\type_documet::all()->pluck('id')->toArray();
    $users = \App\user::all()->pluck('id')->toArray();
    return [
        //
    'first_name'=>$faker->name,
    'last_name'=>$faker->lastName,
    'document'=>$faker->randomNumber(10),
    'address'=>$faker->address,
    'city'=>$faker->city,
    'date_Of_Birth'=>$faker->date,
    'email'=>$faker->email,
    'phone'=>$faker->phoneNumber,
    'Expiry_Month'=>$faker->creditCardExpirationDatee,//fecha de vencimiento
    'Expiry_year'=>$faker->creditCardExpirationDateString,//fecha expiracion
    'CCV'=>$faker->randomNumber(3),
    'tipoDocuement_idDocument'=>$faker->optional()->randomElement($type_documents),
    'userId_idDocument'=>$faker->optional()->randomElement($users),
    ];
});
