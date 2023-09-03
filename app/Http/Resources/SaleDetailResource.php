<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'sale_number' => $this->title,
            'total_price' => $this->news_content,
            'created' => date_format($this->created_at, 'Y/m/d H:i:s'),
            'cart' => $this->whenLoaded('cart')
        ];
    }
}
