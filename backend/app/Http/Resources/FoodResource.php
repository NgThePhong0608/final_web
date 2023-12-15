<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'food_id' => $this->id,
            'food_name' => $this->food_name,
            'food_star' => $this->food_star,
            'food_vote' => $this->food_vote,
            'food_price' => $this->food_price,
            'food_discount' => $this->food_discount,
            'food_desc' => $this->food_desc,
            'food_status' => $this->food_status,
            'food_type' => $this->food_type,
            'food_category' => $this->food_category,
            'food_src' => $this->food_src,
        ];
    }
}
