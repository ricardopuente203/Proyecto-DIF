@extends('layouts.pdfinicio')
@section('content')
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NombreCompleto</th>
            <th>FechaNacimiento</th>
            <th>Domicilio</th>
            <th>ProgramaBeneficiado</th>
            <th>NumeroTelefono</th>
            <th>FechaAceptacion</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($beneficiarios as $beneficiario)
        <tr>
            <td>{{$beneficiario->id}}</td>
            <td>{{$beneficiario->NombreCompleto}}</td>
            <td>{{$beneficiario->FechaNacimiento}}</td>
            <td>{{$beneficiario->Domicilio}}</td>
            <td>{{$beneficiario->ProgramaBeneficiado}}</td>
            <td>{{$beneficiario->NumeroTelefono}}</td>
            <td>{{$beneficiario->FechaAceptacion}}</td>           
        @endforeach
    </tbody>
</table>
@endsection