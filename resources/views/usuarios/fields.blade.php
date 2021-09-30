<!-- Ape Nom Field -->
<div class="form-group col-sm-12" >
<i class="fa fa-user" aria-hidden="true"></i> {!! Form::label('ape_nom', 'apellido y nombre') !!}
    {!! Form::text('ape_nom', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Usuario Field -->
<div class="form-group col-sm-6">
<i class="fa fa-user-circle" aria-hidden="true"></i>{!! Form::label('usuario', 'Usuario:') !!}
    {!! Form::text('usuario', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
<i class="fa fa-key" aria-hidden="true"></i>{!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>