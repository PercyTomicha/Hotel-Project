@extends('admin.layout')
@section('contenido')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
        <br>
            <ol class="breadcrumb">
                <li><a href="/home">Inicio</a></li>
                <li class="active"><strong>Registrar de Estados de Habitaciones</strong></li>
            </ol>
        </div>
    </div>
    <div class="ibox-content">
        <br>
        <a href="{{route('estado_habitacion.index')}}" class="btn btn-w-m btn-warning"><i class="fa fa-list-ol"></i>Listado de <strong>Estados de Habitaciones</strong></a>
        <br>
        <br>
        {!!Form::open(['route'=>['estado_habitacion.store'],'files'=>true,'method'=>'POST','class'=>'form-horizontal'])!!}

            @include('software.estado_habitacion.form')

            {!!Form::submit('Registrar',['class'=>'btn btn-w-m btn-success'])!!}
        {!!Form::close()!!}
    </div>
@endsection