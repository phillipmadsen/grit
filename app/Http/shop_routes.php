<?php
/**
 * Created by PhpStorm.
 * User: Phillip Madsen
 * Date: 8/2/2016
 * Time: 1:43 PM
 */

// xdebug_break();

Route::group(['prefix' => LaravelLocalization::getCurrentLocale(), 'before' => ['localization', 'before']], function ()
{

    Route::group([
        'prefix' => '/admin',
        'middleware' => ['before', 'sentinel.auth', 'sentinel.permission']
    ], function () {
        Route::get('ecom', [ 'as' => 'admin.ecom', 'uses' =>'EcomController@index']);


        Route::get('products', [ 'as' => 'admin.products', 'uses' =>'EcomController@products']);
        Route::get('product/create', [ 'as' => 'admin.product.create', 'uses' =>'EcomController@createProduct']);
        Route::get('product/{id}/edit', [ 'as' => 'admin.product.edit', 'uses' =>'EcomController@editProduct']);

        Route::post('product/create', [ 'as' => 'product.store', 'uses' =>'ProductController@store']);
        Route::get('product/{id}/delete', [ 'as' => 'product.delete', 'uses' =>'ProductController@delete']);
        Route::post('product/{id}/edit', ['as' => 'product.edit', 'uses' =>'ProductController@edit']);

        Route::get('users', [ 'as' => '', 'uses' =>'EcomController@users']);
        Route::get('categories', [ 'as' => 'admin.categories', 'uses' =>'EcomController@categories']);
        Route::get('category/create', [ 'as' => 'admin.categories.create', 'uses' =>'EcomController@createCategory']);
        Route::get('category/{id}/edit', [ 'as' => 'admin.categories.edit', 'uses' =>'EcomController@editCategory']);


        Route::get('sections', [ 'as' => 'admin.sections', 'uses' =>'EcomController@sections']);
        Route::get('section/create', [ 'as' => 'admin.sections.create', 'uses' =>'EcomController@createSection']);
        Route::get('section/{id}/edit', [ 'as' => 'admin.section.edit', 'uses' =>'EcomController@editSection']);


        Route::get('payment', [ 'as' => 'admin.payment', 'uses' =>'EcomController@payment']);
        Route::post('payment', [ 'as' => 'admin.payment.config', 'uses' =>'EcomController@paymentConfig']);
        Route::get('orders', [ 'as' => 'admin.orders', 'uses' =>'EcomController@orders']);
        Route::get('messages', [ 'as' => 'admin.messages', 'uses' =>'EcomController@messages']);
        Route::get('pages', [ 'as' => 'admin.ecom.pages', 'uses' =>'EcomController@pages']);
        Route::get('coupons', [ 'as' => 'admin.coupons', 'uses' =>'EcomController@coupons']);



        Route::get('user/create', [ 'as' => '', 'uses' =>'EcomController@createUser']);
        Route::get('user/{id}/edit', [ 'as' => '', 'uses' =>'EcomController@editUser']);

        Route::get('message/{id}', [ 'as' => '', 'uses' =>'EcomController@showMessage']);
        Route::get('order/{id}', [ 'as' => '', 'uses' =>'EcomController@showOrder']);

        Route::get('ecom/page/create', [ 'as' => '', 'uses' =>'EcomController@createPage']);
        Route::get('ecom/page/{page_name}/edit', [ 'as' => '', 'uses' =>'EcomController@editPage']);

        Route::get('coupon/create', [ 'as' => '', 'uses' =>'EcomController@createCoupon']);
        Route::get('coupon/{id}/edit', [ 'as' => '', 'uses' =>'EcomController@editCoupon']);
    });
});

// xdebug_break();

Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[a-z0-9-]+');

Route::group(['prefix' => LaravelLocalization::getCurrentLocale(), 'before' => ['localization', 'before']], function ()
{



    /**
     * Products Routes
     */
    // Route::get('/', 'ProductController@index');

    Route::get('shop', [ 'as' => 'shop', 'uses' =>'ProductController@index']);
    Route::get('/product/{slug}/show', [ 'as' => 'product.view', 'uses' =>'ProductController@show']);
    Route::get('/product/{id}/photo/{photo_id}/delete',[ 'as' => '', 'uses' => 'ProductController@deletePhoto']);
    Route::get('/option/{id}/delete', [ 'as' => '', 'uses' => 'ProductController@deleteOption']);
    Route::get('/optionvalue/{id}/delete', [ 'as' => '', 'uses' => 'ProductController@deleteOptionValue']);
    Route::get('/search', [ 'as' => '', 'uses' => 'ProductController@search']);




//    Route::get('/product/{id}-{slug}/show', 'ProductController@show');
//    Route::get('/product/{id}/photo/{photo_id}/delete', 'ProductController@deletePhoto');
//    Route::get('/option/{id}/delete', 'ProductController@deleteOption');
//    Route::get('/optionvalue/{id}/delete', 'ProductController@deleteOptionValue');
//    Route::get('/search', 'ProductController@search');





    /**
     * Pages Routes
     */
//    Route::post('/ecpage/create', 'EcomPageController@store');
//    Route::post('/ecpage/{page_name}/edit', 'EcomPageController@edit');
//    Route::get('/ecpages/{page_name}', 'EcomPageController@show');
//    Route::get('/ecpage/{page_name}/delete', 'EcomPageController@delete');


    /**
     * Messages Routes
     */
    Route::get('/contact', 'MessageController@show');
    Route::post('/contact', 'MessageController@store');
    Route::get('/message/{id}/delete', 'MessageController@delete');

    /**
     * Section Routes
     */
    Route::post('/section/create', 'SectionController@store');
    Route::post('/section/{id}/edit', 'SectionController@edit');
    Route::get('/section/{id}/delete', 'SectionController@delete');

    /**
     * Orders Routes
     */
    Route::post('/order/{id}/update', 'OrderController@update');
    Route::get('/order/{id}/show', 'OrderController@show');

    /**
     * Paypal Routes
     */

    Route::get('/payment/paypal', 'PaypalController@postPayment');
    Route::get('payment/status',[
        'as' => 'payment.status',
        'uses' => 'PaypalController@getPaymentStatus',
    ]);


    /**
     * Coupons Routes
     */
    Route::post('/coupon/create', 'CouponController@store');
    Route::get('/coupon/{id}/delete', 'CouponController@delete');
    Route::post('/coupon/{id}/edit', 'CouponController@edit');
    Route::post('/coupon/apply', 'CouponController@apply');

    /**
     * Users Routes
     */
    Route::get('/dashboard', 'UserController@dashboard');
    Route::post('/dashboard/editAccount', 'UserController@editAccount');
    Route::post('/dashboard/editInfo', 'UserController@editInfo');

    Route::get('/user/{id}/delete', 'UserController@delete');
    Route::post('/user/create', 'UserController@store');
    Route::post('/user/{id}/edit', 'UserController@edit');
    Route::post('/user/edit', 'UserController@edit');


//    Route::group(['prefix' => '/shop' ], function () {
        Route::get('/cart', 'CartController@index');
        Route::get('/cart/shipping', 'CartController@shipping');
        Route::post('/cart/shipping', 'CartController@storeShippingInformation');
        Route::post('/cart/payment', 'CartController@payment');
        Route::get('/cart/clear', 'CartController@clear');
        Route::post('/cart/edit/{product_id}', 'CartController@edit');
        Route::get('/cart/remove/{product_id}', 'CartController@remove');
        Route::get('/cart/add/{product_id}', 'CartController@add');
//    });


    /**
     * Categories Routes
     */

    Route::get('/category/{id}/delete', 'CategoryController@delete');
    Route::get('/category/{id}/show', 'CategoryController@show');
    Route::post('/category/create', 'CategoryController@store');
    Route::post('/category/{id}/edit', 'CategoryController@edit');


    Route::get('/payment', function () {
        $publishable_key = App\Models\Payment::first()->stripe_publishable_key;
        return view('payment', compact("publishable_key"));
    });




});
