<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->sentence(),
        'slug' => str_slug($name),
        'type' => ['chair', 'sofa', 'bed', 'table', 'dining', 'stainless chair'],
        'categories' => ['chair', 'sofa', 'bed', 'table', 'dining', 'stainless chair'],
    ];
});
