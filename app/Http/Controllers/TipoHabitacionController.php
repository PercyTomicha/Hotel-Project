<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoHabitacion;

class TipoHabitacionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_habitaciones=TipoHabitacion::all();
        return view('software.tipo_habitacion.index',compact('tipos_habitaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('software.tipo_habitacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'descripcion'=>'required|max:25',
            'nro_camas'=>'required',
            'precio'=>'required',
        ]);
        $tipo_habitacion = new TipoHabitacion($request->all());
        $tipo_habitacion->save();
        \Flash::success("Se ha <strong>Registrado</strong> el Tipo =><strong>".$tipo_habitacion->descripcion."</strong> de forma exitosa!");
        return redirect('tipo_habitacion');
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
        $tipo_habitacion = TipoHabitacion::find($id);
        return view('software.tipo_habitacion.edit',compact('tipo_habitacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'descripcion'=>'required|max:25',
            'nro_camas'=>'required',
            'precio'=>'required',
        ]);
        $tipo_habitacion = TipoHabitacion::findOrFail($id);
        $tipo_habitacion->update($request->all());
        \Flash::success("Se ha <strong>Actualizado</strong> el Tipo =><strong>".$tipo_habitacion->descripcion."</strong> de forma exitosa!");
        return redirect('tipo_habitacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_habitacion = TipoHabitacion::findOrFail($id);
        TipoHabitacion::destroy($id);
        \Flash::success("Se ha <strong>Eliminado</strong> el Tipo =><strong>".$tipo_habitacion->descripcion."</strong> de forma exitosa!");
        return redirect('estado_habitacion');
    }
}
