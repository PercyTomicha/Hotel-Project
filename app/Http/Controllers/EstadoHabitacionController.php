<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstadoHabitacion;

class EstadoHabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados_habitaciones=EstadoHabitacion::all();
        return view('software.estado_habitacion.index',compact('estados_habitaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('software.estado_habitacion.create');
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
        ]);
        $estado_habitacion = new EstadoHabitacion($request->all());
        $estado_habitacion->save();
        \Flash::success("Se ha <strong>Registrado</strong> el Estado =><strong>".$estado_habitacion->descripcion."</strong> de forma exitosa!");
        return redirect('estado_habitacion');
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
        $estado_habitacion = EstadoHabitacion::find($id);
        return view('software.estado_habitacion.edit',compact('estado_habitacion'));
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
        ]);
        $estado_habitacion = EstadoHabitacion::findOrFail($id);
        $estado_habitacion->update($request->all());
        \Flash::success("Se ha <strong>Actualizado</strong> el Estado =><strong>".$estado_habitacion->descripcion."</strong> de forma exitosa!");
        return redirect('estado_habitacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estado_habitacion = EstadoHabitacion::findOrFail($id);
        EstadoHabitacion::destroy($id);
        \Flash::success("Se ha <strong>Eliminado</strong> el Estado =><strong>".$estado_habitacion->descripcion."</strong> de forma exitosa!");
        return redirect('estado_habitacion');
    }
}
