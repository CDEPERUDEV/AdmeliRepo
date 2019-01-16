<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
        //campos obligatorios
    protected $fillable=[
    	'nombres','apellidos','nota1',
    	'nota2'];
    	// deshabilitamos los timestamps
    	public $timestamps=false;
}
