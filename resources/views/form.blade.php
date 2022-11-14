<div class="form-group">
    {{Form::label('name','NombreCompleto')}}
    {{Form::text('NombreCompleto',null,['class'=>'form-control'])}}
    {{Form::label('fechanacimiento','FechaNacimiento')}}
    {{Form::text('FechaNacimiento',null,['class'=>'form-control'])}}

    {{Form::label('domicilio','Domicilio')}}
    {{Form::text('Domicilio',null,['class'=>'form-control'])}}
    {{Form::label('programabeneficiario','ProgramaBeneficiario')}}
    {{Form::text('ProgramaBeneficiario',null,['class'=>'form-control'])}}
    {{Form::label('numerotelefono','NumeroTelefono')}}
    {{Form::text('NumeroTelefono',null,['class'=>'form-control'])}}
    {{Form::label('fechaaceptacion','FechaAceptacion')}}
    {{Form::text('FechaAceptacion',null,['class'=>'form-control'])}}
    {{Form::label('curp','Curp')}}
    {{Form::text('Curp',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('credenciallector','CredencialLector')}}
    {{Form::file('CredencialLector') }}
</div>
