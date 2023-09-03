<?php

namespace App\Http\Controllers;

use App\Http\Resources\InventoryResource;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventryController extends Controller
{
    public function index(Request $request) {
        if(!$request->query('key')) {
            return response()->json(['error' => 'Unauthorized Access'], 400);
        }

        $data = Inventory::with('unit:id,name')->get();
        return new InventoryResource($data);
    }
}
