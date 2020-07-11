<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->randomElement([
            'رویداد تکنولوژي',
            'همایش ذهن برتر',
            'رویداد علم داده',
            'دورهمی برنامه نویسی',
            'اجتماع و تکنولوژي',
            'داده کاوی',
            'معرفی اساتید برتر و ارائه تجربه',
            'استارتاپ ویکند جم',
            'استارتاپ پزشکی',
            'استارتاپ ورزشی',
            'رویداد ایده برتر',
            'رویداد مدیریت زمان',
        ]),
        'description' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه .',
        'image' => 'https://via.placeholder.com/286x180?text=Image',
        'price' => $faker->randomElement([
            150000 , 450000 , 252000 , 2521000 , 250000 , 150000 , 850000 , 650000, 450000 , 950000 , 410000 , 320000
        ]),
        'stock'=> $faker->randomDigitNotNull,
        'category_id' => $faker->randomElement([
          1 , 2 , 3
        ]),
    ];
});
