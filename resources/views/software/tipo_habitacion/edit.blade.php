@extends('admin.layout')
@section('contenido')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
        <br>
            <ol class="breadcrumb">
                <li><a href="/home">Inicio</a></li>
                <li class="active"><strong>Modificar de Tipos de Habitaciones</strong></li>
            </ol>
        </div>
    </div>
    <div class="ibox-content">
        <br>
        <a href="{{route('tipo_habitacion.index')}}" class="btn btn-w-m btn-warning"><i class="fa fa-list-ol"></i>Listado de <strong>Tipos de Habitaciones</strong></a>
        <br>
        <br>
        {!! Form::model($tipo_habitacion, ['method' => 'PATCH','class'=>'form-horizontal','route' => ['tipo_habitacion.update', $tipo_habitacion->id]]) !!}

            @include('software.tipo_habitacion.form')

            {!!Form::submit('Actualizar',['class'=>'btn btn-w-m btn-default'])!!}
        {!!Form::close()!!}
    </div>
@endsection