@extends('admin.layout')
@section('contenido')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
        <br>
            <ol class="breadcrumb">
                <li><a href="/home">Inicio</a></li>
                <li class="active"><strong>Listado de Estados de Habitaciones</strong></li>
            </ol>
        </div>
    </div>
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <br>
                        <div style="float:left">
                            <a href="{{route('estado_habitacion.create')}}" class="btn btn-w-m btn-primary"><i class="fa fa-plus"></i> Agregar Nuevo <strong>Estado de Habitación</strong></a>
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <!--<th style="width: 64px;">Nombre</th>-->
                                        <th>Descripción</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=1 @endphp
                                @foreach($estados_habitaciones as $h)
                                    <tr class="gradeX">
                                        <td>{{$i}}</td>
                                        <td>{{$h->descripcion}}</td>
                                        <td>
                                            <a class="btn btn-w-m btn-info" href="{{ route('estado_habitacion.edit',$h->id) }}"><i class="fa fa-edit"></i> Editar</a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['estado_habitacion.destroy', $h->id],'style'=>'display:inline']) !!}
                                                {!!Form::button('<i class="fa fa-trash-o"></i> Eliminar', ['type' => 'submit', 'class' => 'btn btn-w-m btn-danger'] )!!}
                                            {!! Form::close() !!}
                                        </td>
                                        @php $i=$i+1 @endphp
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Descripción</th>
                                        <th>Acción</th>
                                    </tr>
                                    <!--
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                    -->
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop