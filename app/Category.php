<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];

    public function getImageAttribute($value){return url($value);}

    public function books(){return $this->hasMany(Book::class);}


}
