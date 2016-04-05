<?php

use App\Ad;
use App\Category;
use App\State;
use App\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

$factory->define(User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(State::class, function (Faker\Generator $faker) {
    return [
        'name' => str_random(10),
        'initials' => str_random(2),
    ];
});

$factory->define(Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence,
    ];
});

$factory->define(Ad::class, function (Faker\Generator $faker) {
    return [
        'title' => 'Animal Farm',
        'content' => '<h2>This is an awesome book!</h2>  <br>  This is an awesome book by George Orwell.',
        'is_donation' => false,
        'accepts_trades' => true,
        'price' => 10,
        'state_id' => 14,
        'city' => 'Belém',
        'category_id' => factory(Category::class)->create()->id,
    ];
});
