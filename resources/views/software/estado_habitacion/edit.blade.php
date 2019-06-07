@extends('admin.layout')
@section('contenido')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
        <br>
            <ol class="breadcrumb">
                <li><a href="/home">Inicio</a></li>
                <li class="active"><strong>Modificar de Estados de Habitaciones</strong></li>
            </ol>
        </div>
    </div>
    <div class="ibox-content">
        <br>
        <a href="{{route('estado_habitacion.index')}}" class="btn btn-w-m btn-warning"><i class="fa fa-list-ol"></i>Listado de <strong>Estados de Habitaciones</strong></a>
        <br>
        <br>
        {!! Form::model($estado_habitacion, ['method' => 'PATCH','class'=>'form-horizontal','route' => ['estado_habitacion.update', $estado_habitacion->id]]) !!}

            @include('software.estado_habitacion.form')

            {!!Form::submit('Actualizar',['class'=>'btn btn-w-m btn-default'])!!}
        {!!Form::close()!!}
    </div>
@endsection