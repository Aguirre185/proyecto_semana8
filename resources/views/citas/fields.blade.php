<!-- Idpaciente Field -->
<div class="form-group col-sm-6">
<i class="fa fa-user" aria-hidden="true">{!! Form::label('idpaciente', 'Idpaciente:') !!}
    {!! Form::number('idpaciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Cita Field -->
<div class="form-group col-sm-6">
<i class="fa fa-user-circle" aria-hidden="true">{!! Form::label('fecha_cita', 'Fecha Cita:') !!}
    {!! Form::text('fecha_cita', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Citascol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('citascol', 'Citascol:') !!}
    {!! Form::text('citascol', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Iddoctor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iddoctor', 'Iddoctor:') !!}
    {!! Form::number('iddoctor', null, ['class' => 'form-control']) !!}
</div>