<!-- Ape Nom Field -->
<div class="col-sm-12">
<i class="fa fa-user" aria-hidden="true">{!! Form::label('ape_nom', 'Ape Nom:') !!}
    <p>{{ $paciente->ape_nom }}</p>
</div>

<!-- Dni Field -->
<div class="col-sm-12">
    {!! Form::label('dni', 'Dni:') !!}
    <p>{{ $paciente->dni }}</p>
</div>

<!-- Celular Field -->
<div class="col-sm-12">
    {!! Form::label('celular', 'Celular:') !!}
    <p>{{ $paciente->celular }}</p>
</div>

