<?php

namespace App\Http\Controllers;

use App\Http\Resources\SaleDetailResource;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function show($id) {
        $sale = Sale::with(['user', 'cart'])->findOrFail($id);
        return new SaleDetailResource($sale);
    }
}
