<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //campos obligatorios
    protected $fillable=[
    	'titulo','edicion','tipo',
    	'disponible','ejemplares','imagen',
    	'publicacion','author_id'];
    	// deshabilitamos los timestamps
    	public $timestamps=false;
}
