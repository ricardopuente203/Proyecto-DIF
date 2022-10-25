@extends('layouts.app')
@section('title','Almacen')
@section('content')
           
            <h5 class="text-center">{{$almacen->name}}</h5>
            
        
            <div class="text-center">
                <p>Editar datos del apoyo.</p>
                <a href="/delete/{{$almacen->id}}" class="btn btn-primary">
                    Delete... </a>
                <a href="/almacen/{{$almacen->id}}" class="btn btn-secondary">
                Mostrar... </a>
                <a href="/almacen/{{$almacen->id}}/edit" class="btn btn-secondary">
                Editar... </a>
            </div>
@endsection