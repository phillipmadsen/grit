<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Section;
use App\Models\Payment;
use App\Models\OrderProduct;
use App\Models\UserInfo;
use App\Models\OptionValue;
use Sentinel;
use App;
use Session;
use \Illuminate\Database\Eloquent\Collection;
use App\Ecommerce\helperFunctions;

class CartController extends Controller
{
    public function __construct()
    {
        $this->user = Sentinel::getUser();

        $this->middleware('sentinel.auth', ['except' => [
            'index',
            'add',
            'remove',
            'clear'
        ]]);
    }

    public function index()
    {
        $sections = Section::all();
        if ( Sentinel::check()) {
            $cart =  Sentinel::getUser()->cart;
        } else {
            $cart = new Collection;
            if (Session::has('cart')) {
                foreach (Session::get('cart') as $item) {
                    $elem = new Cart;
                    $elem->product_id = $item['product_id'];
                    $elem->amount = $item['qty'];
                    if (isset($item['options'])) {
                        $elem->options = $item['options'];
                    }
                    $cart->add($elem);
                }
            }
        }
        $total = 0;
        $options = new Collection;
        foreach ($cart as $item) {
            $total += $item->product->price*$item->amount;
            if ($item->options) {
                $values = explode(',',$item->options);
                foreach ($values as $value) {
                    $options->add(OptionValue::find($value));
                }
            }
        }
        return view('frontend.shop.cart', compact('sections', 'total', 'cart','options'));
    }

    public function add($product_id, Request $request)
    {
        $pid = Product::findOrFail($product_id)->id;
        if ((Product::find($pid)->quantity - $request->qty) < 0) {
            return Redirect()->back()->with([
                'flash_message' => 'Out of Stock',
                'flash-warning' => true
            ]);
        }
        /**
         * Check If the user is a guest , if so store the cart in a session
         */
        if (Sentinel::check()) {
            $exists = 0;
            /**
            * Check if the product already exists in the cart, if so increment the quantity
            */
            if (Session::has('cart')) {
                foreach (Session::get('cart') as $key => $cart) {
                    if ($cart['product_id'] == $product_id) {
                        $cart['qty'] += $request->qty;
                        if ($cart['qty'] <= 0) {
                            $cart['qty'] = 1;
                        }
                        Session::forget('cart.'.$key);
                        if ($request->options)
                        {
                            Session::push('cart', [
                                'product_id' => $product_id,
                                'qty' => $cart['qty'],
                                'options' => implode(',',$request->options)
                            ]);
                        }
                        else
                        {
                            Session::push('cart', [
                                    'product_id' => $product_id,
                                    'qty' => $cart['qty']
                                ]);
                        }
                        $exists = 1;
                        break;
                    }
                }
            }
            /**
             * If the product is not in the cart , add a new one
             */
            if (!$exists) {
                if ($request->options)
                {
                    Session::push('cart', [
                        'product_id' => $product_id,
                        'qty' => $request->qty,
                        'options' => implode(',',$request->options)
                    ]);
                }
                else
                {
                    Session::push('cart', [
                        'product_id' => $product_id,
                        'qty' => $request->qty,
                    ]);
                }
            }
        }
        /**
         * If the user is logged in , store the cart in the database
         */
        else {
            // old // if (count($cart = Cart::whereProduct_idAndUser_id($product_id, Sentinel::getUser()->getUserId()->first())) {
            if (count($cart = Cart::whereProduct_idAndUser_id($product_id, Sentinel::findById()))) {
                $request->qty ? $cart->amount += $request->qty : $cart->amount += 1;
                if ($cart->amount <= 0) {
                    $cart->amount = 1;
                }
                $cart->save();
            } else {
                $cart = new Cart;
                $cart->user_id = Sentinel::findById();
                $cart->product_id = $pid;
                if ($request->options) {
                    $cart->options = implode(',',$request->options);
                }
                $request->qty ? $cart->amount = $request->qty : $cart->amount = 1;
                if ($cart->amount <= 0) {
                    $cart->amount = 1;
                }
                $cart->save();
            }
        }
        return \Redirect()->back()->with([
            'flash_message' => 'Added to Cart !'
        ]);
    }


    public function remove($product_id)
    {
        if (Sentinel::check()) {
//            Cart::whereProduct_idAndUser_id($product_id,  $user_id = Sentinel::getUser()->getUserId()->delete());
            Cart::whereProduct_idAndUser_id($product_id,  $user_id = Sentinel::findById());
        } else {
            foreach (Session::get('cart') as $key => $item) {
                if ($item['product_id'] == $product_id) {
                    Session::forget('cart.'.$key);
                    break;
                }
            }
        }
        return \Redirect()->back()->with([
            'flash_message' => 'Product Removed From Cart !',
            'flash-warning' => true
        ]);
    }

    public function clear()
    {
        if (Sentinel::check()) {
            Sentinel::getUser()->cart()->delete();
        } else {
            Session::flush('cart');
        }
        return \Redirect()->back();
    }

    public function payment(Request $request)
    {

        $userCart = Sentinel::getUser()->cart;
        $total = 0;
        foreach ($userCart as $item) {
            $total += ($item->product->price)*($item->amount);
        }
        if (Session::has('coupon')) {
            $total = $total-(($total*Session::get('coupon.discount'))/100);
        }
        $billing = App::make('App\Ecommerce\Billing\BillingInterface');
        $billing->charge([
            'email' => Sentinel::getUser()->email,
            'token' => $request->stripeToken,
            'amount' => $total
        ]);
        $order = Order::create([
            'user_id' => Sentinel::findById(),
            'amount' => $total,
            'status' => 'Processing',
            'firstname' => Session::get('shipping.firstname'),
            'lastname' => Session::get('shipping.lastname'),
            'shipping_address' => Session::get('shipping.address'),
            'shipping_city' => Session::get('shipping.city'),
            'shipping_zipcode' => Session::get('shipping.zipcode'),
            'shipping_country' => Session::get('shipping.country'),
            'payment_method' => 'Credit Card',
            'phone' => Session::get('shipping.phone'),
            'coupon_id' => Session::get('coupon.id')
        ]);
        Session::forget('coupon');
        foreach ($userCart as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'amount' => $item->amount,
                'options' => $item->options
            ]);
            $item->product->quantity -= $item->amount;
            $item->product->save();
        }
        $this->clear();
        return \Redirect('/dashboard')->with([
            'alert-success' => 'Payment success'
        ]);
    }

    public function shipping()
    {
        if (!Sentinel::getUser()->cart->count()) {
            return \Redirect()->back()->with([
            'flash_message' => 'Your Cart is empty !',
            'flash-warning' => true
        ]);
        }
        else{
            $user = Sentinel::getUser();
            helperFunctions::getPageInfo($sections,$cart,$total);
            return view('frontend.account.shipping', compact('sections', 'total', 'cart', 'user'));
        }
    }

    public function storeShippingInformation(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        $user = Sentinel::findUserById();
        Session::put('shipping', $request->except('_token'));
        $userInfo = userInfo::where('user_id', $user()->id);
        $userInfo->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'zipcode' => $request->zipcode
        ]);
        helperFunctions::getPageInfo($sections,$cart,$total);
        $publishable_key = Payment::first()->stripe_publishable_key;
        return view('site.payment', compact('sections', 'total', 'cart', 'publishable_key'));
    }
}
