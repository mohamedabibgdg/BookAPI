<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $table='part';
    protected $guarded=[];

    public function book(){return $this->belongsTo(Book::class);}

}
