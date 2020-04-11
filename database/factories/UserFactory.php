<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\role;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'roleid' => role::get('id')->random(),
        'phone' => $faker->randomDigitNotNull,
        'address' => $faker->address,
        'username'=>$faker->userName,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
