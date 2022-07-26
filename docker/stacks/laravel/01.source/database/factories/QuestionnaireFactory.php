<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Questionnaire::class, function (Faker $faker) {
    return [
        'title_en' => $faker->sentence(),
        'title_fr' => $faker->sentence(),
        'title_nl' => $faker->sentence(),
        'description_en' => $faker->paragraphs(rand(2,5), true),
        'description_fr' => $faker->paragraphs(rand(2,5), true),
        'description_nl' => $faker->paragraphs(rand(2,5), true),
    ];
});
