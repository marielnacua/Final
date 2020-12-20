<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use App\Instructor;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $instructors = Instructor::all()->pluck('id')->toArray();
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'start' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'end' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'tags' => $faker->word,
        'instructor_id' => $faker->randomElement($instructors)
    ];
});
