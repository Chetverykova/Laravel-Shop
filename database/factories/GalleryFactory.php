<?php

/** @var Factory $factory */

use App\Gallery;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Gallery::class, function (Faker $faker) {
    return [
        'product_id' => null,
    ];
});
