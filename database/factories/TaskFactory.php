<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence,
        'project_id' => factory(App\Project::class), //this is the cleaner way to have this.
        // see projeatfactory for bulky way
    ];
});
