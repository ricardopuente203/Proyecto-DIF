<div class="form-group">
    {{Form::label('','NombreCompleto')}}
    {{Form::text('NombreCompleto',null,['class'=>'form-control'])}}
    {{Form::label('','FechaNacimiento')}}
    {{Form::date('FechaNacimiento',null,['class'=>'form-control'])}}

    {{Form::label('','Domicilio')}}
    {{Form::text('Domicilio',null,['class'=>'form-control'])}}
    {{Form::label('','ProgramaBeneficiado')}}
    {{Form::text('ProgramaBeneficiado',null,['class'=>'form-control'])}}
    {{Form::label('','NumeroTelefono')}}
    {{Form::text('NumeroTelefono',null,['class'=>'form-control'])}}
    {{Form::label('','FechaAceptacion')}}
    {{Form::date('FechaAceptacion',null,['class'=>'form-control'])}}
    {{Form::label('','Curp')}}
    {{Form::text('Curp',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('','CredencialLector')}}
    {{Form::file('CredencialLector') }}
</div>
