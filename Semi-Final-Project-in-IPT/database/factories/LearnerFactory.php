<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Learner;
use Faker\Generator as Faker;

$factory->define(Learner::class, function (Faker $faker) {
    $levs = ['novice','intermediate','advanced'];
    $stt = ['active', 'inactive', 'suspended'];

    return [
        'user_id' => $faker->unique()->numberBetween(1,50),
        'level' => $levs[array_rand($levs)],
        'status' => $stt[array_rand($stt)],
    ];
});
