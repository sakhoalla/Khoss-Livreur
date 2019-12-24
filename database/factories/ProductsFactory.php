<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->words(2,true),
        'description' => $faker->paragraph(3,true),
        'prix'=> $faker->numberBetween(100, 9999999),
        'category_id'=> 1,
        'product_image'=>$faker->imageUrl()
        ];
        
});
