<?php

namespace Fully\Http\Controllers;

use Fully\Models\Cart;
use Fully\Models\CartItem;

use Illuminate\Support\Facades\Auth;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Http\Request;

use Fully\Http\Requests;
use Fully\Http\Controllers\Controller;

class CartController extends Controller
{


    public function addItem ($productId){
        $cart = Cart::where('user_id', Sentinel::getUser())->first();
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id = Sentinel::getUser();
            $cart->save();
        }
        $cartItem  = new Cartitem();
        $cartItem->product_id = $productId;
        $cartItem->cart_id = $cart->id;
        $cartItem->save();
        return redirect(getLang().'/shop/cart');
    }



    public function showCart(){
        $cart = Cart::where('user_id', Sentinel::getUser()->id)->first();

        if(!$cart){
            $cart =  new Cart();
            $cart->user_id = Sentinel::getUser()->id;
            $cart->save();
        }

        $items = $cart->cartItems;
        $total=0;
        foreach($items as $item){
            $total+=$item->product->price;
        }

        return view('frontend.shop.cart', ['items'=>$items,'total'=>$total]);
    }






  public function checkout(){
        // $cart = Cart::where('user_id', Sentinel::getUser()->id)->first();

        // if(!$cart){
        //     $cart =  new Cart();
        //     $cart->user_id=Sentinel::getUser()->id;
        //     $cart->save();
        // }

        // $items = $cart->cartItems;
        // $total=0;
        // foreach($items as $item){
        //     $total+=$item->product->price;
        // }
        //return view('frontend.shop.cart',['items'=>$items,'total'=>$total]);
        return view('frontend.shop.checkout');
    }
    public function removeItem($id){

        CartItem::destroy($id);
        return redirect(getLang().'/shop/cart');
    }

    // http://laravel.io/forum/09-21-2015-tutorial-how-to-craft-a-digital-eshop-with-laravel-5
}