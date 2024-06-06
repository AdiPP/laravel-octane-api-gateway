<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getProducts()
    {
        return response()->json([
            'products' => [
                [
                    'id' => 1,
                    'name' => 'Product 1'
                ],
                [
                    'id' => 2,
                    'name' => 'Product 2'
                ],
            ]
        ]);
    }

    public function createOrder(Request $request)
    {
        return response()->json([
            'order' => [
                'id' => 1,
                'product_id' => $request->input('product_id'),
                'quantity' => $request->input('quantity'),
            ],
        ]);
    }
}