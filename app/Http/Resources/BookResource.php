<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    public function withResponse($request, $response){
        $response->header('X-Value', 'True');
    }

    public function toArray($request){
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'image'=>$this->image,
            'category'=>$this->category,
            'parts'=>PartCollection::collection($this->parts),
        ];
    }
}
