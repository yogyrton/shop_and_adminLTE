<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Color\ColorResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'title' => $this->title,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'category' => $this->category->title,
            'colors' => ColorResource::collection($this->colors),
        ];
    }
}
