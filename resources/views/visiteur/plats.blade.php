@extends("templates.visiteur")
@section("contenu")
@isset($categorie)
<div class="card text-bg-dark mb-4">
  <img src="{{ asset($categorie->photo) }}" class="card-img" alt="...">
  <div class="card-img-overlay text-dark">
    <h5 class="card-title">{{$categorie->titre}}</h5>
    <p class="card-text"><small>{{$categorie->plats->count()}} plats</small></p>
  </div>
</div>
@endisset
    @isset($plats)
        @foreach($plats as $plat)
      
            <div class="card mb-3" >
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{asset($plat->getPhoto())}}" class="rounded-start" alt="..." height="150px">
                </div>
                <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">{{$plat->intitule}}</h5>
                            <h5 class="card-title text-primary">{{$plat->prix}} Dhs</h5>
                            <p class="card-text"><b>Description : </b> {{$plat->description }}</p>
                            <p class="card-text"><b>Compositions : </b> 
                        @foreach($plat->composants as $composant)
                            {{$composant->libelle}},
                        @endforeach
                        ...
                        </p>
                        
                        </div>
                </div>
               <div class="col-2">
                <?php 
                $nombreTotal=$plat->commandes->sum(function($cmd){
                        return $cmd->pivot->nombre;
                });
                ?>
                
                @switch(true)
                    @case ($nombreTotal>=100)
                        <i class="bi bi-star-fill" style="color:gold"></i>
                    @case ($nombreTotal<100 && $nombreTotal>=50)
                        <i class="bi bi-star-fill" style="color:gold"></i>
                         @case ($nombreTotal<50 && $nombreTotal>=20)
                        <i class="bi bi-star-fill" style="color:gold"></i>
                         @case ($nombreTotal>=4)
                        <i class="bi bi-star-fill" style="color:gold"></i>
                        @default
                        <i class="bi bi-star-fill" style="color:gold"></i>
                @endswitch
                ({{ $nombreTotal }})

                </div>
            </div> 
        </div>
      

        @endforeach
    @endisset
@endsection