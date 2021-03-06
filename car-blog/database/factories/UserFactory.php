<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\Profile;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->unique()->userName,
        'email_verified_at' => now(),
        'password' => '123456789', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Profile::class, function (Faker $faker){
    return [
        'title' => $faker->jobTitle,
        'bio' => $faker->paragraphs(2, true),
    ];
});

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'text' => $faker->paragraphs(6, true),
        'image' => 'default_profile.png'
    ];
});
