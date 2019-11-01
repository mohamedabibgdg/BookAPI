<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded=[];

    public function parts(){return $this->hasMany(Part::class);}

    public function getImageAttribute($value){return url($value);}

    public function category(){return $this->belongsTo(Category::class);}

}
