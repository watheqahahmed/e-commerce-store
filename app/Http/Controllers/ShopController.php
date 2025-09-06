<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    // دالة عرض الصفحة الترحيبية
    public function index()
    {
        // ترجع العرض من resources/views/shop/welcome.blade.php
        return view('shop.welcome');
    }
}
