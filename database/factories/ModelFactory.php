<?php

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

$factory->define(Fully\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$factory->define(Fully\Models\Article::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'content' =>  $faker->text ,
        'slug' =>  $faker->word ,
        'category_id' =>  $faker->randomNumber() ,
        'meta_keywords' =>  $faker->word ,
        'meta_description' =>  $faker->text ,
        'is_published' =>  $faker->boolean ,
        'path' =>  $faker->word ,
        'file_name' =>  $faker->word ,
        'file_size' =>  $faker->randomNumber() ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(Fully\Models\BaseModel::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(Fully\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'slug' =>  $faker->word ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(Fully\Models\Faq::class, function (Faker\Generator $faker) {
    return [
        'question' =>  $faker->word ,
        'answer' =>  $faker->text ,
        'order' =>  $faker->randomNumber() ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(Fully\Models\FormPost::class, function (Faker\Generator $faker) {
    return [
        'sender_name_surname' =>  $faker->word ,
        'sender_email' =>  $faker->word ,
        'sender_phone_number' =>  $faker->word ,
        'subject' =>  $faker->word ,
        'message' =>  $faker->text ,
        'created_ip' =>  $faker->word ,
        'is_answered' =>  $faker->boolean ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(Fully\Models\Maillist::class, function (Faker\Generator $faker) {
    return [
        'email' =>  $faker->safeEmail ,
    ];
});

$factory->define(Fully\Models\Menu::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'url' =>  $faker->url ,
        'order' =>  $faker->randomNumber() ,
        'parent_id' =>  $faker->randomNumber() ,
        'type' =>  $faker->word ,
        'option' =>  $faker->word ,
        'is_published' =>  $faker->boolean ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(Fully\Models\News::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'content' =>  $faker->text ,
        'slug' =>  $faker->word ,
        'datetime' =>  $faker->date() ,
        'is_published' =>  $faker->boolean ,
        'path' =>  $faker->word ,
        'file_name' =>  $faker->word ,
        'file_size' =>  $faker->randomNumber() ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(Fully\Models\Page::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'slug' =>  $faker->word ,
        'content' =>  $faker->text ,
        'is_published' =>  $faker->boolean ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(Fully\Models\Photo::class, function (Faker\Generator $faker) {
    return [
        'file_name' =>  $faker->word ,
        'title' =>  $faker->word ,
        'path' =>  $faker->word ,
        'file_size' =>  $faker->randomNumber() ,
        'type' =>  $faker->word ,
        'relationship_id' =>  $faker->randomNumber() ,
    ];
});

$factory->define(Fully\Models\PhotoGallery::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'slug' =>  $faker->word ,
        'content' =>  $faker->text ,
        'is_published' =>  $faker->boolean ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(Fully\Models\Product::class, function (Faker\Generator $faker) {
    return [
        'slug' =>  $faker->word ,
   //     'slug'  => Str::slug('the-grace-company'),
        'ispromo' =>  $faker->boolean ,
        'is_published' =>  $faker->boolean ,
        'availability' =>  $faker->word ,
        'manufacturer' =>  $faker->word ,
        'product_line' =>  $faker->word ,
        'status' =>  $faker->word ,
        'office_status' =>  $faker->word ,
        'guid' =>  $faker->word ,
        'asin' =>  $faker->word ,
        'model' =>  $faker->word ,
        'sku' =>  $faker->word ,
        'upc' =>  $faker->word ,
        'mpn' =>  $faker->word ,
        'name' =>  $faker->name ,
        'subtitle' =>  $faker->word ,
        'short_description' =>  $faker->text ,
        'description' =>  $faker->text ,
        'category' =>  $faker->word ,
        'meta_title' =>  $faker->word ,
        'meta_description' =>  $faker->word ,
        'facebook_title' =>  $faker->word ,
        'google_plus_title' =>  $faker->word ,
        'twitter_title' =>  $faker->word ,
        'price' =>  $faker->randomNumber() ,
        'promo_price' =>  $faker->randomNumber() ,
        'msrp_price' =>  $faker->randomNumber() ,
        'dealer_price' =>  $faker->randomNumber() ,
        'employee_price' =>  $faker->randomNumber() ,
        'sale_price' =>  $faker->randomNumber() ,
        'sale_price_coupon_code' =>  $faker->word ,
        'sale_price_start_date' =>  $faker->dateTimeBetween() ,
        'sale_price_end_date' =>  $faker->dateTimeBetween() ,
        'quantity' =>  $faker->randomNumber() ,
        'tax_id' =>  $faker->randomNumber() ,
        'tax_status' =>  $faker->word ,
        'tax_class' =>  $faker->word ,
        'video_url' =>  $faker->word ,
     
        'path' =>  $faker->word ,
        'file_name' =>  $faker->word ,
        'file_size' =>  $faker->randomNumber() ,
        'image_alt' =>  $faker->word ,
        'primary_image_label' =>  $faker->word ,
        'primary_image_file_size' =>  $faker->randomNumber() ,
        'primary_image' =>  $faker->word ,
        'second_image_label' =>  $faker->word ,
        'second_image_file_size' =>  $faker->randomNumber() ,
        'second_image' =>  $faker->word ,
        'third_image_label' =>  $faker->word ,
        'third_image_file_size' =>  $faker->randomNumber() ,
        'third_image' =>  $faker->word ,
        'fourth_image_label' =>  $faker->word ,
        'fourth_image_file_size' =>  $faker->randomNumber() ,
        'fourth_image' =>  $faker->word ,
        'fifth_image_label' =>  $faker->word ,
        'fifth_image_file_size' =>  $faker->randomNumber() ,
        'fifth_image' =>  $faker->word ,
        'product_doc' =>  $faker->word ,
        'product_doc_label' =>  $faker->word ,
        'product_doc_file_size' =>  $faker->randomNumber() ,
        'tracking' =>  $faker->word ,
        'datalayer' =>  $faker->word ,
        'pubished_at' =>  $faker->dateTimeBetween() ,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ];
});

$factory->define(Fully\Models\Project::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'description' =>  $faker->text ,
        'slug' =>  $faker->word ,
        'path' =>  $faker->word ,
        'file_name' =>  $faker->word ,
        'file_size' =>  $faker->randomNumber() ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(Fully\Models\Role::class, function (Faker\Generator $faker) {
    return [
        'slug' =>  $faker->word ,
        'name' =>  $faker->name ,
        'permissions' =>  $faker->text ,
    ];
});

$factory->define(Fully\Models\Setting::class, function (Faker\Generator $faker) {
    return [
        'settings' =>  $faker->text ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(Fully\Models\Slider::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'description' =>  $faker->text ,
        'path' =>  $faker->word ,
        'file_name' =>  $faker->word ,
        'file_size' =>  $faker->randomNumber() ,
        'order' =>  $faker->randomNumber() ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(Fully\Models\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' =>  $faker->name ,
        'slug' =>  $faker->word ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(Fully\Models\User::class, function (Faker\Generator $faker) {
    return [
        'email' =>  $faker->safeEmail ,
        'password' =>  bcrypt($faker->password) ,
        'permissions' =>  $faker->text ,
        'last_login' =>  $faker->dateTimeBetween() ,
        'first_name' =>  $faker->firstName ,
        'last_name' =>  $faker->lastName ,
    ];
});

$factory->define(Fully\Models\Video::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'slug' =>  $faker->word ,
        'video_id' =>  $faker->word ,
        'type' =>  $faker->word ,
        'lang' =>  $faker->word ,
    ];
});

