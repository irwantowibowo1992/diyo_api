<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Helpers\Helper;

class SaleDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'sale_number' => $this->sale_number,
            'total_price' => $this->total_price,
            'created' => Helper::formatDate($this->created_at),
            'cart' => $this->whenLoaded('cart'),
            'payment_method' => $this->whenLoaded('paymentMethod'),
        ];
    }
}
