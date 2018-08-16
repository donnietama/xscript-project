<?php

use Faker\Generator as Faker;

$factory->define(App\Admin\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 1, $variableNbWords = true),
        'desc' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
