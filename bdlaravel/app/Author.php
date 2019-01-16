<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // campos obligatorios
    protected $fillable=[
    	'nombres','email'
    ];
    //deshabilatamos los timestamps

    public $timestamps=false;
}
