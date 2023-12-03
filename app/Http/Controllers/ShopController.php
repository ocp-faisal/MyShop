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

            $shopName = $shop['body']['shop']['name'];
            $shopId = $shop['body']['shop']['id'];
        return response()->json([
            'shopName' => $shopName,
            'shopId' => $shopId,
        ]);


        
    }

    
    public function index()
    {
        $shop = Auth::user();
        $data = $shop->api()->rest('GET', '/admin/api/2023-04/products.json');
        $products = $data['body']['products'];
        return view('welcome', compact('products'));
    }

}
