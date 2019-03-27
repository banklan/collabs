<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    $gender = $faker->randomElement(['male', 'female']);

    return [
        'f_name' => $faker->firstName,
        'l_name' => $faker->lastName,
        'gender' => $gender,
        'city' => $faker->city,
        'email' => $faker->freeEmail,
        'password' =>$password ?: $password = bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->realText($maxNbChars = 80),
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'user_id' => rand(1, 14),
    ];
});
