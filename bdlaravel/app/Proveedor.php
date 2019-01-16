<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = 'proveedores';
    protected $primaryKey ='idproveedore';
    public $timestamps = false;

    protected $fillable =[
        'razon_social'
    ];
}
