<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {
        if(!$request->query('key')) {
            return response()->json(['error' => 'Unauthorized Access'], 400);
        }
        $products = Product::with('variants:id,product_id,name,additional_price')
            ->get()
            ->toQuery()
            ->paginate(10);

        return ProductResource::collection($products);
    }
}
