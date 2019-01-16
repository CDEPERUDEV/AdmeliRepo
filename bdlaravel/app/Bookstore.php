<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookstore extends Model
{
    //campos obligatorios
    protected $fillable=[
    	'razon_social','direccion','url'];
    	// deshabilitamos los timestamps
    	public $timestamps=false;
}
