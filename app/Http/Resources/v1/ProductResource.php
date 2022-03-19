<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'image_url' => base64_encode((Storage::disk('public')->get('products/'. $this->image_url))),
            'sku' => $this->sku,
            'category' => $this->category->name,
            'description' => $this->description,
            'additional_info' => $this->additional_info,
        ];
    }
}
