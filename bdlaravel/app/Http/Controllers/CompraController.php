<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\CompraRequest;
use App\Compra;
use App\CompraDetalle;
use App\Proveedor;
use App\Producto;
use DB;

use Response;
use Illuminate\Support\Collection;
class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //recuperamos las compras de la bd
        $compras = DB::select('call usp_listar_compras()');
        return view('compras.index',compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //abrimos el formulario
        $proveedores =Proveedor::all();
        $productos=Producto::all();
        return view('compras.create',compact('compras','proveedores','productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       
    }
}
