<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\supply;
use App\medecine;
use App\supply_order;
use Faker\Generator as Faker;

$factory->define(supply_order_detail::class, function (Faker $faker) {
    return [
       'batch_nbr'=>$faker->randomDigit,
       'qty'=>$faker->randomDigit,
       'supply_orderid' => supply_Order::get('id')->random(),
       'medid' => medecine::get('id')->random(),
       'created_at' => now(),
        'updated_at' => now(),

    ];
});
