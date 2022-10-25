@extends('layouts.app')
@section('title','Trainers')
@section('content')
    <form class="form-group" method="POST" action="{{action('InventarioController@update', $inventario->id)}}"
     enctype="multipart/form-data">
     @method('PUT')
    @csrf
     <div clas="form-group">
     <label for=''>Nombre del apoyo</label>
     <input type='text'name="NameApoyo"class='form-control'value="{{$inventario->NameApoyo}}">
     <label for=''>Descripcion del apoyo</label>
     <input type='text'name="NumeroDespensas"class='form-control'value="{{$inventario->NumeroDespensas}}">

</div>
<div class="form-group">
   

</div>
<button type="submit"class="btn btn-primary">
    Editar</button>
</form>
@endsection