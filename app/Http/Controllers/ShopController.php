<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function getDetails(Request $request)
    {
        $shop = $request->user();
        $shop = $shop->api()->rest('GET', '/admin/api/2023-04/shop.json');
        //$products = $shop->api()->rest('GET', '/admin/api/2021-04/products.json');

        // echo "<pre>";
        // print_r($products['body']['products']);
        echo "</pre>";
        print_r($shop['body']['shop']['name']);
        print_r($shop['body']['shop']['id']);
    }

    public function index()
    {
        $shop = Auth::user();
        $data = $shop->api()->rest('GET', '/admin/api/2023-04/products.json');
        $products = $data['body']['products'];
        return view('welcome', compact('products'));
    }
}
