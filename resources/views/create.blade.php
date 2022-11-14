@extends("layouts.app")
@section('title', 'beneficiarios Create')
@section('content')

{!!Form::open(['route'=>'beneficiarios.store','method'=>'POST','files'=>'true']) !!}
@include('form')
{{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}
@endsection