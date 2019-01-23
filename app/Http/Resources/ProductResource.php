<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        //  return [
        // 'data'  => $this->collection
//            'id' => $this->id,
//            'name' => $this->name,
//            'amount' => $this->amount,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at
        //  ];
    }
}
