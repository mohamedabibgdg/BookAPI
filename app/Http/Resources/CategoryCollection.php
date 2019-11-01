<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class CategoryCollection extends Resource
{
    public function toArray($request){
        return parent::toArray($request);
    }
}
