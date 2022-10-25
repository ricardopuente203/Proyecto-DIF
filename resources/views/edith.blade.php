<!--<html>
    <head>
        <title>

         </title>
    </head>
    <body>
       <p>Hola mundo desde mi primer vista Ricardo Aldair Puente Reyes</p>
    </body>
</html> -->
<!-- Añadido el 27-09-22 -->
@extends('layouts.app')
@section('title','Trainers')
@section('content')
    <form class="form-group" method="POST" action="{{action('BeneficiariosController@update', $beneficiario->id)}}"
     enctype="multipart/form-data">
     @method('PUT')
    @csrf
     <div clas="form-group">
     <label for=''>Nombre completo</label>
     <input type='text'name="NombreCompleto"class='form-control'value="{{$beneficiario->NombreCompleto}}">
     <label for=''>Fecha de Nacimiento</label>
     <input type='date'name="FechaNacimiento"class='form-control'value="{{$beneficiario->FechaNacimiento}}">
     <label for=''>Domicilio</label>
     <input type='text'name="Domicilio"class='form-control'value="{{$beneficiario->Domicilio}}">
     <label for=''>Programa al que ha sido beneficiado</label>
     <input type='text'name="ProgramaBeneficiado"class='form-control'value="{{$beneficiario->ProgramaBeneficiado}}">
     <label for=''>Numero de telefono</label>
     <input type='text'name="NumeroTelefono"class='form-control'value="{{$beneficiario->NumeroTelefono}}">
     <label for=''>Fecha de aceptación</label>
     <input type='date'name="FechaAceptacion"class='form-control'value="{{$beneficiario->FechaAceptacion}}">
     <label for=''>Curp</label>
     <input type='text'name="Curp"class='form-control'value="{{$beneficiario->Curp}}">
</div>
<div class="form-group">
    <label for="">Credencial de lector:</label>
    <input type="file"name="CredencialLector" value="{{$beneficiario->CredencialLector}}">

</div>
<button type="submit"class="btn btn-primary">
    Editar</button>
</form>
@endsection