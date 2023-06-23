<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // index
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Product List',
            'data' => Product::all()
        ], 200);
    }

    // view
    public function show(Product $product)
    {
        return response()->json([
            'success' => true,
            'message' => 'Product Detail',
            'data' => $product
        ], 200);
    }
}
