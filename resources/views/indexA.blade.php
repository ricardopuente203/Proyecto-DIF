@include('layouts.app')
@section('title','Almacen')
@section('content')
     
@csrf
    <p>Listado del almacen</p>
    <div class="row">
    @foreach ($almacen as $almacen)
    <div class="col-sm">
    <div class="card" style="width: 18rem;"> 
 
  <div class="card-body">
    <h5 class="card-title">{{$almacen->name}}</h5>
    <h5 class="card-title">Nombre del apoyo: {{$almacen->NombreApoyo}}</h5>
    <h5 class="card-title">Descripcion del apoyo:{{$almacen->DescripcionApoyo}}</h5>
    <h5 class="card-title">Requisitos del apoyo:{{$almacen->RequisitosApoyo}}</h5>
    <h5 class="card-title">Numero de despensas:{{$almacen->NumeroDespensas}}</h5>
    <h5 class="card-title">Periodo de duracion:{{$almacen->PeriodoDuracion}}</h5>
    
    <p class="card-text">Some quick example text</p>
    <button type="submit"class="btn btn-primary">
    Guardar</button>
  
      <a href="almacen/{{$almacen->id}}"class="btn btn-secondary">
        Mostrar...</a>
</form>
  </div>
</div>
</div>
@endforeach
</div>