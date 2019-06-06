@extends('admin.layout')
@section('contenido')

        <div class="row">
            <div class="col-sm-3">
                {!!Form::label('anio','Año',['class'=>'col-sm-2 control-label'])!!}
                <div class="col-sm-8">
                    {!!Form::text('anio',null,['class'=>'form-control','placeholder'=>'Ej: 2015','required'])!!}         
                </div>
            </div>
            <div class="col-sm-4">
                {!!Form::label('color','Color',['class'=>'col-sm-2 control-label'])!!}
                <div class="col-sm-8">
                    {!!Form::text('color',null,['class'=>'form-control','placeholder'=>'Ej: Rojo, Azul','required'])!!}         
                </div>
            </div>
            <div class="col-sm-5">
                {!!Form::label('numero_asientos','N° Asientos',['class'=>'col-sm-12 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::text('numero_asientos',null,['class'=>'form-control','placeholder'=>'Ej: 5','required'])!!}      
                </div>
            </div>
        </div>
@stop