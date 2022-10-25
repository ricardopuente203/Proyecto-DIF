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
@section('title','Beneficiados')
@section('content')
     
@csrf
    <p>Listado de Beneficiados</p>
    <div class="row">
    @foreach ($beneficiarios as $beneficiarios)
    <div class="col-sm">
    <div class="card" style="width: 18rem;"> 
  <img style="height: 100px; width: 100px;
  background-color: #EFEFEF; margin: 20px;
  "class="card-img-top rounded-circle mx-auto d-block"
  src="images/{{$beneficiarios->CredencialLector}}"alt="">
  <div class="card-body">
    <h5 class="card-title">{{$beneficiarios->name}}</h5>
    <h5 class="card-title">Nombre: {{$beneficiarios->NombreCompleto}}</h5>
    <h5 class="card-title">Fecha de Nacimiento:{{$beneficiarios->FechaNacimiento}}</h5>
    <h5 class="card-title">Domicilio:{{$beneficiarios->Domicilio}}</h5>
    <h5 class="card-title">Programa al que ha sido beneficiado:{{$beneficiarios->ProgramaBeneficiado}}</h5>
    <h5 class="card-title">Numero de telefono:{{$beneficiarios->NumeroTelefono}}</h5>
    <h5 class="card-title">Fecha de aceptación:{{$beneficiarios->FechaAceptacion}}</h5>
    <h5 class="card-title">Curp:{{$beneficiarios->Curp}}</h5>
    <p class="card-text">Some quick example text</p>
    <button type="submit"class="btn btn-primary">
    Guardar</button>
    
      <a href="beneficiarios/{{$beneficiarios->id}}"class="btn btn-secondary">
        Mostrar...</a>
</form>
  </div>
</div>
</div>
@endforeach
</div>
         