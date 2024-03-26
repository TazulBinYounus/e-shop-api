<?php
  
namespace App\Http\Resources;

use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
  
class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array
     */
    public function toArray(Request $request): array
    {
        
        if($this->discount && $this->discount->type === 'percentage'){
            $discounAmount = ($this->discount->amount / $this->price) * 100;
            $discounAmount = $this->price - $discounAmount;
        }else{
            $discounAmount = $this->price - $this->discount->amount; 
        }
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'sku' => $this->sku,
            'category' => [
                'id' => $this->category->id,
                'name_en' => $this->category->name_en,
                'name_bn' => $this->category->name_bn,
            ],
            'price' => $this->price,
            'size' => $this->size,
            'name' => $this->name,
            'description' => $this->description,
            'is_active' => $this->is_active,
            'discount_price' =>  number_format($discounAmount, 2),
            'discount' => $this->discount->amount,
            'discount_type' => $this->discount->type,
            'images' => ImageResource::collection($this->images),
        ];
    }
}