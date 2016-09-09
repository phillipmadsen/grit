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
use Carbon\Carbon;


$factory->define(App\Models\AlbumPhoto::class, function (Faker\Generator $faker) {
    return [
        'product_id' =>  $faker->randomNumber() ,
        'photo_src' =>  $faker->word ,
        'alt' =>  $faker->word ,
        'caption' =>  $faker->word ,
        'photoinfo' =>  $faker->word ,
        'linkto' =>  $faker->word ,
        'use_main' =>  $faker->boolean ,
        'use_thumb' =>  $faker->boolean ,
        'use_gallery' =>  $faker->boolean ,
    ];
});

$factory->define(App\Models\Article::class, function (Faker\Generator $faker) {
    return [
        'author_id' =>  $faker->randomNumber() ,
        'is_published' =>  $faker->boolean ,
        'is_draft' =>  $faker->boolean ,
        'has_product_link' =>  $faker->boolean ,
        'product_link_nofollow' =>  $faker->boolean ,
        'title' =>  $faker->word ,
        'subtitle' =>  $faker->word ,
        'excerpt' =>  $faker->text ,
        'content' =>  $faker->text ,
        'slug' =>  $faker->word ,
        'meta_title' =>  $faker->word ,
        'fb_title' =>  $faker->word ,
        'gp_title' =>  $faker->word ,
        'tw_title' =>  $faker->word ,
        'meta_keywords' =>  $faker->word ,
        'meta_description' =>  $faker->text ,
        'path' =>  $faker->word ,
        'file_name' =>  $faker->word ,
        'file_size' =>  $faker->randomNumber() ,
        'category_id' =>  $faker->randomNumber() ,
        'user_id' =>  $faker->randomNumber() ,
        'link_to_product_title' =>  $faker->word ,
        'link_to_product' =>  $faker->word ,
        'lang' =>  $faker->word ,
        'deleted_at' =>  $faker->dateTimeBetween() ,
    ];
});

$factory->define(App\Models\Cart::class, function (Faker\Generator $faker) {
    $users = array_pluck(\App\Models\User::all(), 'id');
    $products = array_pluck(\App\Models\Product::all(), 'id');
    return [
        'user_id' => $faker->randomElement($users),
        'product_id' => $faker->randomElement($products),
        'amount' =>  $faker->randomFloat(2, 100, 500),
        'options' =>  $faker->word,
    ];

});

$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {
    $sections = \App\Models\Section::all()->toArray();
    return [
        'title' =>  $faker->word ,
        'section_id' =>  function () {
            return factory(App\Models\Section::class)->create()->id;
        } ,
        'meta_description' =>  $faker->text ,
        'slug' =>  $faker->word ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(App\Models\CategoryProduct::class, function (Faker\Generator $faker) {
    return [
        'category_id' =>  $faker->randomNumber() ,
        'product_id' =>  $faker->randomNumber() ,
    ];
});

$factory->define(App\Models\Coupon::class, function (Faker\Generator $faker) {
    return [
        'name' =>  $faker->name ,
        'uses' =>  $faker->randomNumber() ,
        'discount' =>  $faker->randomFloat() ,
    ];
});

$factory->define(App\Models\Faq::class, function (Faker\Generator $faker) {
    return [
        'question' =>  $faker->word ,
        'answer' =>  $faker->text ,
        'order' =>  $faker->randomNumber() ,
        'lang' =>  $faker->word ,
        'path' =>  $faker->word ,
        'file_name' =>  $faker->word ,
        'file_size' =>  $faker->randomNumber() ,
        'answered_by' =>  $faker->randomNumber() ,
        'asked_by' =>  $faker->randomNumber() ,
        'is_published' =>  $faker->boolean ,
        'published_at' =>  $faker->dateTimeBetween() ,
    ];
});

$factory->define(App\Models\FormPost::class, function (Faker\Generator $faker) {
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

$factory->define(App\Models\Maillist::class, function (Faker\Generator $faker) {
    return [
        'email' =>  $faker->safeEmail ,
    ];
});

$factory->define(App\Models\Menu::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'icon_class' =>  $faker->word ,
        'url' =>  $faker->url ,
        'order' =>  $faker->randomNumber() ,
        'parent_id' =>  $faker->randomNumber() ,
        'type' =>  $faker->word ,
        'option' =>  $faker->word ,
        'is_published' =>  $faker->boolean ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(App\Models\Message::class, function (Faker\Generator $faker) {
    return [
        'name' =>  $faker->name ,
        'email' =>  $faker->safeEmail ,
        'message' =>  $faker->word ,
        'subject' =>  $faker->word ,
        'user_id' =>  function () {
            return factory(App\Models\User::class)->create()->id;
        } ,
        'opened' =>  $faker->randomNumber() ,
    ];
});

$factory->define(App\Models\News::class, function (Faker\Generator $faker) {
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

$factory->define(App\Models\Option::class, function (Faker\Generator $faker) {
    return [
        'product_id' =>  function () {
            return factory(App\Models\Product::class)->create()->id;
        } ,
        'name' =>  $faker->name ,
    ];
});

$factory->define(App\Models\OptionProduct::class, function (Faker\Generator $faker) {
    return [
        'status' =>  $faker->word ,
        'office_status' =>  $faker->word ,
        'availability' =>  $faker->word ,
        'slug' =>  $faker->word ,
        'ispromo' =>  $faker->boolean ,
        'is_published' =>  $faker->boolean ,
        'name' =>  $faker->name ,
        'subtitle' =>  $faker->word ,
        'manufacturer' =>  $faker->word ,
        'details' =>  $faker->text ,
        'description' =>  $faker->text ,
        'thumbnail' =>  $faker->word ,
        'thumbnail2' =>  $faker->word ,
        'photo_album' =>  $faker->word ,
        'pubished_at' =>  $faker->dateTimeBetween() ,
        'video_url' =>  $faker->word ,
        'meta_title' =>  $faker->word ,
        'meta_description' =>  $faker->word ,
        'facebook_title' =>  $faker->word ,
        'google_plus_title' =>  $faker->word ,
        'twitter_title' =>  $faker->word ,
        'lang' =>  $faker->word ,
        'deleted_at' =>  $faker->dateTimeBetween() ,
    ];
});

$factory->define(App\Models\OptionValue::class, function (Faker\Generator $faker) {
    return [
        'option_id' =>  function () {
            return factory(App\Models\Option::class)->create()->id;
        } ,
        'value' =>  $faker->word ,
    ];
});

$factory->define(App\Models\Order::class, function (Faker\Generator $faker) {
    return [
        'user_id' =>  function () {
            return factory(App\Models\User::class)->create()->id;
        } ,
        'firstname' =>  $faker->firstName ,
        'lastname' =>  $faker->lastName ,
        'shipping_country' =>  $faker->word ,
        'shipping_city' =>  $faker->word ,
        'shipping_address' =>  $faker->word ,
        'shipping_zipcode' =>  $faker->word ,
        'phone' =>  $faker->phoneNumber ,
        'shipping_method' =>  $faker->word ,
        'payment_method' =>  $faker->word ,
        'status' =>  $faker->word ,
        'amount' =>  $faker->randomFloat() ,
        'opened' =>  $faker->randomNumber() ,
        'coupon_id' =>  function () {
            return factory(App\Models\Coupon::class)->create()->id;
        } ,
    ];
});

$factory->define(App\Models\OrderProduct::class, function (Faker\Generator $faker) {
    return [
        'order_id' =>  function () {
            return factory(App\Models\Order::class)->create()->id;
        } ,
        'product_id' =>  function () {
            return factory(App\Models\Product::class)->create()->id;
        } ,
        'amount' =>  $faker->randomNumber() ,
        'options' =>  $faker->word ,
    ];
});

$factory->define(App\Models\Page::class, function (Faker\Generator $faker) {
    return [
        'is_published' =>  $faker->boolean ,
        'is_draft' =>  $faker->boolean ,
        'has_product_link' =>  $faker->boolean ,
        'product_link_nofollow' =>  $faker->boolean ,
        'layout' =>  $faker->word ,
        'title' =>  $faker->word ,
        'subtitle' =>  $faker->word ,
        'excerpt' =>  $faker->text ,
        'content' =>  $faker->text ,
        'slug' =>  $faker->word ,
        'meta_title' =>  $faker->word ,
        'meta_keywords' =>  $faker->word ,
        'meta_description' =>  $faker->text ,
        'fb_title' =>  $faker->word ,
        'gp_title' =>  $faker->word ,
        'tw_title' =>  $faker->word ,
        'link_to_product_title' =>  $faker->word ,
        'link_to_product' =>  $faker->word ,
        'lang' =>  $faker->word ,
        'author_id' =>  $faker->randomNumber() ,
        'section_id' =>  $faker->randomNumber() ,
        'published_at' => $faker->dateTimeBetween('-1 year', '+1 month')->format('Y-m-d'),
        'added_on' =>  $faker->dateTimeBetween() ,
        'deleted_at' =>  $faker->dateTimeBetween() ,
    ];
});

$factory->define(App\Models\Payment::class, function (Faker\Generator $faker) {
    return [
        'stripe_secret_key' =>  $faker->word ,
        'stripe_publishable_key' =>  $faker->word ,
        'paypal_client_id' =>  $faker->word ,
        'paypal_secret' =>  $faker->word ,
    ];
});

$factory->define(App\Models\Photo::class, function (Faker\Generator $faker) {
    return [
        'file_name' =>  $faker->word ,
        'title' =>  $faker->word ,
        'path' =>  $faker->word ,
        'file_size' =>  $faker->randomNumber() ,
        'type' =>  $faker->word ,
        'relationship_id' =>  $faker->randomNumber() ,
        'product_id' =>  function () {
            return factory(App\Models\Product::class)->create()->id;
        } ,
    ];
});

$factory->define(App\Models\PhotoGallery::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'slug' =>  $faker->word ,
        'content' =>  $faker->text,
        'is_published' =>  $faker->boolean,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(App\Models\PriceProduct::class, function ($faker) {
    $products = array_pluck(\App\Models\Product::all(), 'id');
    $prices = array_pluck(\App\Models\price::all(), 'id');

    return [

        'price_id' => $faker->randomElement($prices),
        'product_id' => $faker->randomElement($products)
    ];
});

// $product = factory(App\Models\Price::class)->create();

$factory->define(App\Models\Price::class, function (Faker\Generator $faker) {
    $product =  App\Models\Product::all()->last();

    return [
        'product_id' => $product->id,
        'price' => $faker->randomFloat(2, 100, 500),
        'model' =>  $faker->word ,
        'sku' => $faker->bothify('??-##??-####'),
//        'upc' =>  $faker->ean13,
        'upc' => '636343' . str_random(6),
        'quantity' =>  $faker->numberBetween(6, 774),
        'details' =>  $faker->word ,

    ];
});

//str_slug($name .),


$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {
    $category_id =  \App\Models\Category::all()->random(1);
    $status = ['Online','Offline','Removed', 'Archived','Discontinued'];
    $office_status = ['Draft','Review','inDesign','inProof','inProcess','Hidden','Deleted', 'Live','Removed'];
    $availability = ['Available','InStock','OnHold','OnBackorder','PreOrders','PromoActive','SoldOut','Discontinued'];
    $name = $faker->catchPhrase;
    return array(
        'status' => $faker->randomElement($status),
        'office_status' =>  $faker->randomElement($office_status),
        'availability' => $faker->randomElement($availability),
        'slug' =>  Str::slug($name),
        'ispromo' =>  $faker->boolean($chanceOfGettingTrue = 50),
        'is_published' =>  $faker->boolean($chanceOfGettingTrue = 50),
        'name' =>  $name,
        'subtitle' =>  $faker->word ,
        'manufacturer' =>  $faker->word ,
        'details' =>  $faker->paragraph,
        'description' =>  $faker->paragraph,
        'thumbnail' =>  $faker->imageUrl(600, 480),
        'thumbnail2' =>  $faker->imageUrl(600, 600, 'business', true, 'Faker'),
        'photo_album' =>  $faker->imageUrl(600, 480),
        'pubished_at' =>  $faker->dateTimeBetween() ,
        'video_url' =>  $faker->word ,
        'meta_title' =>  $faker->word ,
        'meta_description' =>  $faker->word ,
        'facebook_title' =>  $faker->word ,
        'google_plus_title' =>  $faker->word ,
        'twitter_title' =>  $faker->word ,
        'lang' =>  'en',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        //'category_id' => $category_id
    );
});


$factory->define(App\Models\Cart::class, function (Faker\Generator $faker) {
    $users = array_pluck(\App\Models\User::all(), 'id');
    $products = array_pluck(\App\Models\Product::all(), 'id');
    return [
        'user_id' => $faker->randomElement($users),
        'product_id' => $faker->randomElement($products),
        'amount' =>  $faker->randomFloat(2, 100, 500),
        'options' =>  $faker->word,
    ];

});



$factory->define(App\Models\ProductFeature::class, function (Faker\Generator $faker) {
    return [
        'product_id' =>  $faker->randomNumber() ,
        'feature_name' =>  $faker->word ,
        'useicon' =>  $faker->boolean ,
        'icon' =>  $faker->word ,
    ];
});

$factory->define(App\Models\ProductVariant::class, function (Faker\Generator $faker) {
    return [
        'product_id' =>  $faker->randomNumber() ,
        'attribute_name' =>  $faker->word ,
        'product_attribute_value' =>  $faker->paragraph,
    ];
});

$factory->define(App\Models\Project::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'description' =>  $faker->paragraph,
        'slug' =>  $faker->word ,
        'path' =>  $faker->word ,
        'file_name' =>  $faker->word ,
        'file_size' =>  $faker->randomNumber() ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(App\Models\Promo::class, function (Faker\Generator $faker) {
    return [
        'product_id' =>  function () {
            return factory(App\Models\Product::class)->create()->id;
        } ,
        'price' =>  $faker->randomFloat() ,
        'model' =>  $faker->word ,
        'sku' =>  $faker->word ,
        'upc' =>  $faker->word ,
        'quantity' =>  $faker->randomNumber() ,
        'start_on' =>  $faker->dateTimeBetween() ,
        'end_on' =>  $faker->dateTimeBetween() ,
        'deleted_at' =>  $faker->dateTimeBetween() ,
    ];
});

$factory->define(App\Models\Role::class, function (Faker\Generator $faker) {
    return [
        'slug' =>  $faker->word ,
        'name' =>  $faker->name ,
        'permissions' =>  $faker->paragraph,
    ];
});

$factory->define(App\Models\Section::class, function (Faker\Generator $faker) {
    return [
        'name' =>  $faker->name ,
        'meta_description' =>  $faker->paragraph,
        'slug' =>  $faker->word ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(App\Models\Setting::class, function (Faker\Generator $faker) {
    return [
        'settings' =>  $faker->paragraph,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(App\Models\Slider::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'description' =>  $faker->paragraph,
        'path' =>  $faker->word ,
        'file_name' =>  $faker->word ,
        'file_size' =>  $faker->randomNumber() ,
        'order' =>  $faker->randomNumber() ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(App\Models\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' =>  $faker->name ,
        'slug' =>  $faker->word ,
        'lang' =>  $faker->word ,
    ];
});

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    $firstname          = $faker->firstname;
    $lastname           = $faker->lastname;
    return [
        //'username' => str_replace('.', '_', $faker->unique()->userName),
        'username' => $firstname . " " . $lastname,
        'email' =>  $faker->safeEmail,
        'password' =>  bcrypt($faker->password),
        'isAdmin' =>  $faker->boolean,
        'remember_token' =>  str_random(10),
        'permissions' =>  $faker->paragraph,
        'last_login'  => $faker->dateTimeThisMonth($max = 'now'),
        'first_name' =>  $firstname,
        'last_name' =>  $lastname
    ];
});

$factory->define(App\Models\UserInfo::class, function (Faker\Generator $faker) {
    $users = \App\Models\User::all()->toArray();
    return [
//        'user_id' =>  function () {
//            return factory(App\Models\User::class)->create()->id;
//        } ,

        'photo' =>  imageUrl($width = 640, $height = 480, 'people'),
        'address' =>  $faker->address,
        'city' =>  $faker->city,
        'state' =>  $faker->state,
        'zipcode' =>  $faker->postcode,
        'country' =>  $faker->country,
        'phone' =>  $faker->phoneNumber,
//        'latitude' => $faker->latitude($min = -90, $max = 90),
//        'longitude' => $faker->longitude($min = -180, $max = 180)

    ];
});

$factory->define(App\Models\Video::class, function (Faker\Generator $faker) {
    return [
        'title' =>  $faker->word ,
        'slug' =>  $faker->word ,
        'video_id' =>  $faker->word ,
        'type' =>  $faker->word ,
        'lang' =>  $faker->word ,
    ];
});

