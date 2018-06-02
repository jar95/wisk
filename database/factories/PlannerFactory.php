<?php

use Faker\Generator as Faker;

$factory->define(App\Planner::class, function (Faker $faker) {
    return [
        //
        'task' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'priority' => $faker->numberBetween($min = 1, $max = 20),
        'time_demanding' => $faker->numberBetween($min = 1, $max = 12),
    ];
});
