<?php

namespace Fully\Http\Controllers;

use Illuminate\Http\Request;

use Fully\Http\Requests;
use Fully\Http\Controllers\Controller;
use Fully\Models\Product;
use Fully\Models\Category;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        // echo "<pre>";
        // var_dump($products);
        // echo "</pre>";
        //die();
         //dd($products);
         return view('frontend.shop.index',['products' => $products]);
        //return view('frontend.shop.index', compact('products', $products));
    }

    /**
     * Display the specified product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function product($slug)
    {
        //$product = Product::findBySlug($slug);



        return view('frontend.shop.product', ['product' => Product::findBySlug($slug)]);

    }
}
