@extends('layouts.app')
@section('title', 'Trainers Create')
@section('content')
<form class="form-group" method="POST" action="/inventario" enctype="multipart/form-data"> 
    @csrf
         <div clas='form-group'>
           
             <label for=''>Nombre del apoyo</label>
             <input type='text'name="NameApoyo"class='form-control'>
             <label for=''>Numero de despensas</label>
             <input type='text'name="NumeroDespensas"class='form-control'>
            
         </div>
         <div clas='form-group'>
            
        </div>
         <button type='submit'class='btn btn-primary'>
        Guardar</button>
</form>
@endsection