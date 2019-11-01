<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    public function withResponse($request, $response){
        $response->header('X-Value', 'True');
    }
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'image'=>$this->image,
            'books'=>BookResource::collection($this->books),
        ];
    }
}
