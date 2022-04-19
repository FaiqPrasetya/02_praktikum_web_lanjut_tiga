<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop()
    {
        return view('shop');
    }

    public function shopDetail()
    {
        return view('shop-detail');
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function myAccount()
    {
        return view('my-account');
    }

    public function wishlist()
    {
        return view('wishlist');
    }
}
