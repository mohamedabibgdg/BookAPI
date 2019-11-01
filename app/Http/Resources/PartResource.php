<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PartResource extends JsonResource
{
    public function withResponse($request, $response){
        $response->header('X-Value', 'True');
    }
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'content'=>$this->content,
            'book'=>new BookResource($this->book),
        ];
    }

}
