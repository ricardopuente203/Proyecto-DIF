@extends('layouts.app')
@section('title', 'Trainers Create')
@section('content')
<form class="form-group" method="POST" action="/apvigentes" enctype="multipart/form-data"> 
    @csrf
         <div clas='form-group'>
             
             <label for=''>Nombre del apoyo</label>
             <input type='text'name="NombreDeApoyo"class='form-control'>
             <label for=''>Periodo de duración</label>
             <input type='text'name="PeriodoDeDuracion"class='form-control'>
            
         </div>
         <div clas='form-group'>
            
        </div>
         <button type='submit'class='btn btn-primary'>
        Guardar</button>
</form>
@endsection