<!-- Idpaciente Field -->
<div class="col-sm-12">
    {!! Form::label('idpaciente', 'Idpaciente:') !!}
    <p>{{ $citas->idpaciente }}</p>
</div>

<!-- Fecha Cita Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_cita', 'Fecha Cita:') !!}
    <p>{{ $citas->fecha_cita }}</p>
</div>

<!-- Citascol Field -->
<div class="col-sm-12">
    {!! Form::label('citascol', 'Citascol:') !!}
    <p>{{ $citas->citascol }}</p>
</div>

<!-- Iddoctor Field -->
<div class="col-sm-12">
    {!! Form::label('iddoctor', 'Iddoctor:') !!}
    <p>{{ $citas->iddoctor }}</p>
</div>

