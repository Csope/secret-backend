<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Secret;
use Carbon\Carbon;
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

$factory->define(Secret::class, function (Faker $faker) {
    return [
        'secretText' => $faker->text,
        'expiresAt' => Carbon::tomorrow(),
        'remainingViews' => 10,
        'hash' => hash('sha256', $faker->unique()->text)
    ];
});
