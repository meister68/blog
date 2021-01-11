<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required'
        ]);
    }
}
