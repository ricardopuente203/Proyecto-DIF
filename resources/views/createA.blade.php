@extends('layouts.app')
@section('title', 'Trainers Create')
@section('content')
<form class="form-group" method="POST" action="/almacen" enctype="multipart/form-data"> 
    @csrf
         <div clas='form-group'>
            <label for=''>Nombre del apoyo</label>
             <input type='text'name="NombreApoyo"class='form-control'>
             <label for=''>Descripcion del apoyo</label>
             <input type='text'name="DescripcionApoyo"class='form-control'>
             <label for=''>Requisitos para solicitar apoyo</label>
             <input type='text'name="RequisitosApoyo"class='form-control'>
             <label for=''>Numero de despensas</label>
             <input type='text'name="NumeroDespensas"class='form-control'>
             <label for=''>Periodo de duración</label>
             <input type='text'name="PeriodoDuracion"class='form-control'>
         </div>
         <div clas='form-group'>
            
        </div>
         <button type='submit'class='btn btn-primary'>
        Guardar</button>
</form>
@endsection