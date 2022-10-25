@extends('layouts.app')
@section('title','APvigentes')
@section('content')
           
            <h5 class="text-center">{{$apvigentes->name}}</h5>
            
        
            <div class="text-center">
                <p>Editar datos del apoyo.</p>
                <a href="/delete/{{$apvigentes->id}}" class="btn btn-primary">
                    Delete... </a>
                <a href="/apvigentes/{{$apvigentes->id}}" class="btn btn-secondary">
                Mostrar... </a>
                <a href="/apvigentes/{{$apvigentes->id}}/edit" class="btn btn-secondary">
                Editar... </a>
            </div>
@endsection