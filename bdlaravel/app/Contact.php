<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //Campos obligatorios 
    protected $fillable=[
    	'nombres','apellidos','nota1',
    	'nota2'
    	];
    //Desahabilitamos los timestamps
    public $timestamps=false;
}
