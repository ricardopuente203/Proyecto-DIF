
@extends('layouts.app')
@section('title', 'Trainers Create')
@section('content')
<form class="form-group" method="POST" action="/beneficiarios" enctype="multipart/form-data"> 
    @csrf
         <div clas='form-group'>
             <label for=''>Nombre completo</label>
             <input type='text'name="NombreCompleto"class='form-control'>
             <label for=''>Fecha de Nacimiento</label>
             <input type='date'name="FechaNacimiento"class='form-control'>
             <label for=''>Domicilio</label>
             <input type='text'name="Domicilio"class='form-control'>
             <label for=''>Programa al que ha sido beneficiado</label>
             <input type='text'name="ProgramaBeneficiado"class='form-control'>
             <label for=''>Numero de telefono</label>
             <input type='text'name="NumeroTelefono"class='form-control'>
             <label for=''>Fecha de aceptación</label>
             <input type='date'name="FechaAceptacion"class='form-control'>
             <label for=''>Curp</label>
             <input type='text'name="Curp"class='form-control'>
             
         </div>
         <div clas='form-group'>
            <label for="">Credencial de lector:</label>
            <input type="file" name="CredencialLector">
           
        </div>
         <button type='submit'class='btn btn-primary'>
        Guardar</button>
</form>
@endsection
