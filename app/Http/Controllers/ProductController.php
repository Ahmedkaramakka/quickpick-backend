<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json([
            ['id' => 1, 'name' => 'Apples', 'price' => 2.5],
            ['id' => 2, 'name' => 'Bananas', 'price' => 3.0],
            ['id' => 3, 'name' => 'Milk', 'price' => 4.5],
        ]);
    }
}
