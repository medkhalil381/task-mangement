<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Idp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idP', 'Idp:') !!}
    {!! Form::select('idP', $produitItems, null, ['class' => 'form-control custom-select']) !!}
</div>
