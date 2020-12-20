<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Instructor;
use Faker\Generator as Faker;

$factory->define(Instructor::class, function (Faker $faker) {
    $aoe_list = ['IT Infrastructure', 'General Mathematics', "General Science",'Programming','Graphics Design', 'Web Development', 'Chemistry', 'Particle Physics'];
    return [
        'user_id' => $faker->unique()->numberBetween(1,50),
        'aoe' => $aoe_list[ array_rand($aoe_list) ],
        'rating' => rand(1,5)
    ];
});
