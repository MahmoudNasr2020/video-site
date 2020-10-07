<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $this->faker->name,
        'email' => $this->faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$.Ck8oLA7G459tORPKH3XwexRdBsrPiAVOVWvY7dGRktuvWG1CLPTq', // password

    ];
});
