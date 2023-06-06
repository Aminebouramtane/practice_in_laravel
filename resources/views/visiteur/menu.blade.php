@extends("templates.visiteur")
@section("contenu")
<div class="row">
@isset($categories)
@foreach($categories as $categorie)
        <div class="card col-5 mx-2 mt-3">
        <img src="{{ $categorie->photo }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $categorie->titre }}</h5>
            
            <a href="{{ route('plats_categorie', $categorie->id) }}" class="btn btn-primary">Découvrir les {{ $categorie->plats->count() }} plats</a>
        </div>
    </div>
@endforeach
@endisset
</div>
@endsection