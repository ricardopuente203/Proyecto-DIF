
@extends('layouts.app')
@section('title','Trainers')
@section('content')
<form class="form-group" method="POST" action="{{action('APvigentesController@update', $apvigentes->id)}}"
     enctype="multipart/form-data">
     @method('PUT')
    @csrf
     <div clas="form-group">
     <label for=''>Nombre del apoyo</label>
     <input type='text'name="NombreDeApoyo"class='form-control'value="{{$apvigentes->NombreDeApoyo}}">
     <label for=''>PeriodoDeDuracion</label>
     <input type='text'name="PeriodoDeDuracion"class='form-control'value="{{$apvigentes->PeriodoDeDuracion}}">

</div>
<div class="form-group">
   

</div>
<button type="submit"class="btn btn-primary">
    Editar</button>
</form>
@endsection 