<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Show the home page.
     */
    public function index()
    {
        return view('shop.index');
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        return view('shop.about');
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('shop.contact');
    }

    /**
     * Show the products page.
     */
    public function products()
    {
        return view('shop.products');
    }
}
