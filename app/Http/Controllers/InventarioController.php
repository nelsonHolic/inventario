<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Inventario;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class InventarioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $inventario_object = Inventario::all();
        return view('inventario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $inventario_id = Input::get('idinventario');
        $producto_id = Input::get('producto_idproducto');
        $inventario_object = Inventario::firstOrCreate(
            array(
                'idinventario'=>$inventario_id,
                'producto_idproducto'=>$producto_id
                )
        );
        if($inventario_object->stock){
            $inventario_object->stock = $inventario_object->stock+1;
        }else{
            $inventario_object->stock = 1;
        }
        $inventario_object->save();
        return view('actualizar_inventario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $inventario_id = Input::get('idinventario');
        $producto_id = Input::get('producto_idproducto');
        $inventario_object = Inventario::firstOrCreate(
            array(
                'idinventario'=>$inventario_id,
                'producto_idproducto'=>$producto_id
            )
        );
        if($inventario_object->stock){
            $inventario_object->stock = $inventario_object->stock-1;
        }else{
            $inventario_object->stock = 0;
        }
        $inventario_object->save();
        return view('actualizar_inventario');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function devolcion($id)
    {
        //
    }

}
