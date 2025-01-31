@extends('produits.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Modifier le produit</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('produits.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oups! </strong> Il y a eu des problèmes avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('produits.update',$produit->npro) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Numéro produit:</strong>
                <input type="text" name="npro" value="{{ $produit->npro }}"class="form-control" placeholder="Saisir un numéro">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Libellé:</strong>
                <input type="text" name="libelle" value="{{ $produit->libelle }}" class="form-control" placeholder="Saisir un libellé">
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Prix:</strong>
                <input type="text" name="prix" value="{{ $produit->prix }}" class="form-control" placeholder="Saisir un prix">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Qté stock:</strong>
                <input type="text" name="qstock" value="{{ $produit->qstock }}" class="form-control" placeholder="Saisir un stock">
            </div>
        </div>
    </div>           
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Détail:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Détail">{{ $produit->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
              <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>
   
    </form>
@endsection