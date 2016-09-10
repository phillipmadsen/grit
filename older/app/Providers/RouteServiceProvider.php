<?php

namespace App\Providers;

use App\Models\CategoryProduct;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param \Illuminate\Routing\Router $router
     */
    public function boot(Router $router)
    {
        //
     //   \Route::singularResourceParameters();

        parent::boot($router);

      //  Route::model('CategoryProduct', 'App\Models\CategoryProduct');

//        $router->bind('user', function ($value) {
//            return App\User::where('name', $value)->first();
//        });

        // $router->bind('Product', function($value){
        //      return \App\Models\Product::where('id', $value)->orWhere('slug', $value)->first();
        // });
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
			require app_path('Http/dev_routes.php');
			require app_path('Http/live_custom_routes.php');
			require app_path('Http/new_routes.php');
			require app_path('Http/shop_routes.php');
//			require app_path('Http/account_routes.php');
			require app_path('Http/api_routes.php');
        });
    }
}
