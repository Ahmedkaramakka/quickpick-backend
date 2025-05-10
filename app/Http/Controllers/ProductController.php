<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Apples', 'price' => 2.5],
            ['id' => 2, 'name' => 'Bread', 'price' => 1.75],
            ['id' => 3, 'name' => 'Milk', 'price' => 3.0]
        ];

        return response()->json($products);
    }
}
