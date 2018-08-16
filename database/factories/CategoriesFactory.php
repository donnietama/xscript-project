<?php

use Faker\Generator as Faker;

$factory->define(App\Admin\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'desc' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
