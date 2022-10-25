@extends('layouts.app')
@section('title','APvigentes')
@section('content')
     
@csrf
    <p>Listado del apoyos vigentes</p>
    <div class="row">
    @foreach ($apvigentes as $apvigentes)
    <div class="col-sm">
    <div class="card" style="width: 18rem;"> 
 
  <div class="card-body">
    <h5 class="card-title">{{$apvigentes->name}}</h5>
    <h5 class="card-title">Nombre del apoyo: {{$apvigentes->NombreDeApoyo}}</h5>
    <h5 class="card-title">periodo de duracion:{{$apvigentes->PeriodoDeDuracion}}</h5>
    
    
    <p class="card-text">Some quick example text</p>
    <button type="submit"class="btn btn-primary">
    Guardar</button>
  
      <a href="apvigentes/{{$apvigentes->id}}"class="btn btn-secondary">
        Mostrar...</a>
</form>
  </div>
</div>
</div>
@endforeach
</div>