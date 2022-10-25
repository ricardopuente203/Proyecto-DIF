@extends('layouts.app')
@section('title','Trainers')
@section('content')
    <form class="form-group" method="POST" action="{{action('AlmacenController@update', $almacen->id)}}"
     enctype="multipart/form-data">
     @method('PUT')
    @csrf
     <div clas="form-group">
     <label for=''>Nombre del apoyo</label>
     <input type='text'name="NombreApoyo"class='form-control'value="{{$almacen->NombreApoyo}}">
     <label for=''>Descripcion del apoyo</label>
     <input type='text'name="DescripcionApoyo"class='form-control'value="{{$almacen->DescripcionApoyo}}">
     <label for=''>Requisitos para solicitar apoyo</label>
     <input type='text'name="RequisitosApoyo"class='form-control'value="{{$almacen->RequisitosApoyo}}">
     <label for=''>Numero de despensas</label>
     <input type='text'name="NumeroDespensas"class='form-control'value="{{$almacen->NumeroDespensas}}">
     <label for=''>Periodo de duración</label>
     <input type='text'name="PeriodoDuracion"class='form-control'value="{{$almacen->PeriodoDuracion}}">
</div>
<div class="form-group">
   

</div>
<button type="submit"class="btn btn-primary">
    Editar</button>
</form>
@endsection