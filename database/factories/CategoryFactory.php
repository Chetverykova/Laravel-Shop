<?php

/** @var Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5'])
    ];
});
