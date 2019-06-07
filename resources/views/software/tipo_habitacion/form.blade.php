<div class="form-group">
    {!!Form::label('descripcion','Descripcion',['class'=>'col-sm-1 control-label'])!!}
    <div class="col-sm-8">
        {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ej. Activo','required'])!!}      
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    {!!Form::label('nro_camas','Nro de Camas',['class'=>'col-sm-1 control-label'])!!}
    <div class="col-sm-8">
        {!!Form::text('nro_camas',null,['class'=>'form-control','placeholder'=>'Ej. 2','required'])!!}      
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    {!!Form::label('precio','Precio',['class'=>'col-sm-1 control-label'])!!}
    <div class="col-sm-8">
        {!!Form::text('precio',null,['class'=>'form-control','placeholder'=>'Ej. 245 (Bs)','required'])!!}      
    </div>
</div>
<div class="hr-line-dashed"></div>