@extends('layouts.principal')
@section('content')
    <div class="ibox-content">
        <div class="hr-line-dashed"></div>
        {!! Form::model($taxi, ['method' => 'PATCH','class'=>'form-horizontal','route' => ['taxi.update', $taxi->id]]) !!}

            @include('crud.taxi.formulario')

            {!!Form::submit('Actualizar',['class'=>'btn btn-w-m btn-default'])!!}
        {!!Form::close()!!}
    </div>
@endsection