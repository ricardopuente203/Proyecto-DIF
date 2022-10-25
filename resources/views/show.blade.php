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
@section('title','Beneficiarios')
@section('content')
            <img style="height: 100px; width: 100px;
            background-color: #EFEFEF; margin: 20px;
            " class="card-img-top rounded-circle mx-auto d-block" src="../images/{{$beneficiario->CredencialLector}}" alt="Imagen del Card...">
            <h5 class="text-center">{{$beneficiario->name}}</h5>
        
            <div class="text-center">
                <p>Editar datos del beneficiario.</p>
                <a href="/delete/{{$beneficiario->id}}" class="btn btn-primary">
                    Delete... </a>
                <a href="/beneficiarios/{{$beneficiario->id}}" class="btn btn-secondary">
                Mostrar... </a>
                <a href="/beneficiarios/{{$beneficiario->id}}/edit" class="btn btn-secondary">
                Editar... </a>
            </div>
@endsection