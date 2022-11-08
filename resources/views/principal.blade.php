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
    </div>
    <div style="margin-top: 150px; margin-left: 30px;">
        <img src='images\Almacen.png' class="float-left" onclick="window.location='{{ route("almacen.principal") }}'">
    </div>
    <div style="margin-top: 150px;">
        <img src='images\Apoyos vigentes.png' class="float-left" onclick="window.location='{{ route("apoyos.principal") }}'">
    </div>
    
</form>