<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json([
            ['id' => 1, 'name' => 'Apple'],
            ['id' => 2, 'name' => 'Bread'],
            ['id' => 3, 'name' => 'Milk']
        ]);
    }
}
