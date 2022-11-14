@include('layouts.app')
@section('title','DIFAPP')
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<form method="POST" enctype="multipart/form-data">
    @csrf
    <div style="margin-top: 150px; margin-right: 30px;">
        <img src='images\Beneficiarios.png' class="float-left" onclick="window.location='{{ route("beneficiarios.principal") }}'">
        <img src='images\Almacen.png' class="float-left" onclick="window.location='{{ route("almacen.principal") }}'">
        <img src='images\Avigentes.png' class="float-left" onclick="window.location='{{ route("apoyos.principal") }}'">
        <img src='images\AgrApoyo.png' class="float-left" onclick="window.location='{{ route("agregar.principal") }}'">
    </div>
   
   
    
</form>