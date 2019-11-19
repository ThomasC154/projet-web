<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'image' => $faker->text,
        'name' => $faker->name,
        'price' => Str::random(10),
        'description' => $faker->text,
    ];
});
