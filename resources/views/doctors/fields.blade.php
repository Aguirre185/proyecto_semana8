<!-- Ape Nom Field -->
<div class="form-group col-sm-6">
<i class="fa fa-user" aria-hidden="true">{!! Form::label('ape_nom', 'Ape Nom:') !!}
    {!! Form::text('ape_nom', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Dni Field -->
<div class="form-group col-sm-6">
<i class="fa fa-user-circle" aria-hidden="true"> {!! Form::label('dni', 'Dni:') !!}
    {!! Form::number('dni', null, ['class' => 'form-control']) !!}
</div>

<!-- Especialidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    {!! Form::text('especialidad', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>