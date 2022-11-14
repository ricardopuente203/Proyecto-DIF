@extends('layouts.app')
@endsection('title','beneficiario')
@section('content')
           <img style=height: 100px; width: 100px;
           background-color: #EFEFEF; margin: 20px;
           " class="card-img-top rounded-circle mx-auto d-block"
           src="../images/{{$beneficiario->CredencialLector}}" alt="">
           <h5 class="text-center">{{$Beneficiario->NombreCompleto}}</h5> 
           <h5 class="text-center">{{$beneficiario->FechaNacimiento}}</h5> 
           <div class="text-center">
            <a href="/delete/{{$beneficiario->id}}/edit"class="btn btn-secondary">
                Editar...</a>
            <a href="/beneficiarios/{{$beneficiario->id}}/edit"class="btn btn-secondary">
                Editar...</a>
            <a href="{{route('listado.pdf')}}"class="btn btn-sm btn-secondary">
                Descargar entrenadores en pdf
            </a>
        </div>   
        @endsection