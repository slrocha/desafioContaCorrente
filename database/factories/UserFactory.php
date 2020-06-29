<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\ContaCorrente;
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

$factory->define(ContaCorrente::class, function (Faker $faker) {
    return [
        'agencia' => $faker->numberBetween($min = 1000, $max = 9000),
        'conta' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'digito' => $faker->randomDigit,
        'saldo' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'titular' => $faker->name,
        'cpf' => $faker->randomNumber($nbDigits = NULL, $strict = false),
      
    ];
});
