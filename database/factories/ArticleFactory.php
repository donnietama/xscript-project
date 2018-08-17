<?php

use Faker\Generator as Faker;

$factory->define(App\Admin\Article::class, function (Faker $faker) {
    return [
        'category_id'   => $faker->randomDigitNotNull,
        'title'         => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'excerpt'       => $faker->text($maxNbChars = 170),
        'content'       => $faker->paragraphs($nb = 3, $asText = true),
        'published'     => $faker->boolean($chanceOfGettingTrue = 50),
        'keywords'      => $faker->sentences($nb = 3, $asText = true),
        'meta_desc'     => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
