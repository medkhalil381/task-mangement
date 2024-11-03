<!-- Nom Field -->
<div class="col-sm-12">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $cat->nom }}</p>
</div>

<!-- Idp Field -->
<div class="col-sm-12">
    {!! Form::label('idP', 'Idp:') !!}
    <p>{{ $cat->idP }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $cat->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $cat->updated_at }}</p>
</div>

