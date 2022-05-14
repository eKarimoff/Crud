<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
namespace Database\Factories;

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{

public function definition(){

    return [
        'name' => 'Teacher',
        'email' => 'teacher@gmail.com',
        'email_verified_at' => now(),
        'password' => '12345678',
        'remember_token' => Str::random(10),
        
    ];
    
}
}

