<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function getDetails(Request $request)
    {
        $shop = $request->user();
        $products = $shop->api()->rest('GET', '/admin/api/2021-04/products.json');

        echo "<pre>";
        print_r($products['body']['products']);
    }

}
