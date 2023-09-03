<?php

namespace App\Http\Controllers;

use App\Http\Resources\SaleDetailResource;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function show(Request $request, $id) {
        if(!$request->query('key')) {
            return response()->json(['error' => 'Unauthorized Access'], 400);
        }
        $sale = Sale::with(
            [
                'user:id,name,email',
                'cart:id,cart_item',
                'paymentMethod:id,name'
            ]
        )->findOrFail($id);
        return new SaleDetailResource($sale);
    }
}
