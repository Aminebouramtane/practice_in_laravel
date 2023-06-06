<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">

    <form action="{{route("filter")}}" method="get">
      <label for="Categorie">Categorie : </label>
      @isset($pageInfo["categorieIds"])
        <select name="categorie" class="form-control text-center w-50 mt-1">
          @foreach ($pageInfo["categorieIds"] as $key => $cat)
              <option value="{{$cat->id}}">{{$cat->id}}</option>
          @endforeach
        </select>
      @endisset

      
      <label for="Plat">Plat : </label>
      @isset($pageInfo["platIds"])
        <select name="plat" class="form-control text-center w-50 mt-1">
          @foreach ($pageInfo["platIds"] as $key => $plat)
              <option value="{{$plat->id}}">{{$plat->id}}</option>
          @endforeach
        </select>
      @endisset


      <label for="Commande">Commande : </label>
      @isset($pageInfo["commandeIds"])
        <select name="commande" class="form-control text-center w-50 mt-1">
          @foreach ($pageInfo["commandeIds"] as $key => $serveur)
              <option value="{{$serveur->id}}">{{$serveur->id}}</option>
          @endforeach
        </select>
      @endisset


      <label for="Serveur">serveur : </label>
      @isset($pageInfo["serveurIds"])
        <select name="serveur" class="form-control text-center w-50 mt-1">
          @foreach ($pageInfo["serveurIds"] as $key => $serveur)
              <option value="{{$serveur->id}}">{{$serveur->id}}</option>
          @endforeach
        </select>
      @endisset

      <button type="sumbit" class="btn btn-primary mt-3">Rechercher</button>
    </form>


    <h3 class="text-danger mt-5">a. Liste des plats d’une catégorie donnée :    </h3>
    <table class="table mt-5">
      <thead>
        <tr class="align-center">
          <th scope="col">Categorie</th>
          <th scope="col">Intitulé</th>
          <th scope="col">Description</th>
          <th scope="col">prix</th>
        </tr>
      </thead>
      <tbody>
  
            
        @isset($plats)
            <tr class="align-center">
              @forelse($plats as $plat)
                <td><b>{{$plat->categorie_id}}</b></td>
                <td>{{$plat->intitule}}</td>
                <td>
                  {{$plat->description}}
                </td>
                <td>
                  {{$plat->prix}}
                </td>
            </tr>
            
            @empty
            DATA VIDE :(
            @endforelse
        @endisset
      </tbody>
    </table>
    <h3 class="text-danger">b. Le titre de la catégorie d'un plat donné :</h3>
    <h1 class="mt-5">@isset($categorieTitle)Le Titre de la categorie :  {{$categorieTitle->titre}} @endisset</h1>
  
    <h3 class="text-danger">c. La composition d'un plat donné </h3>

    <table class="table mt-5">
      <thead>
        <tr class="align-center">
          <th scope="col">ID</th>
          <th scope="col">Libellé</th>
          <th scope="col">Quantité</th>
          <th scope="col">Unité</th>
        </tr>
      </thead>
      <tbody>
  
        @isset($composants)
            <tr class="align-center">
              @forelse($composants as $composant)
                <td><b>{{$composant->id}}</b></td>
                <td>{{$composant->libelle}}</td>
                <td>
                  {{$composant->pivot->quantite}}
                </td>
                <td>
                  {{$composant->pivot->unite}}
                </td>
            </tr>
            
            @empty
            <tr>
              <td colspan="4" class="text-center"><b>DATA VIDE :(</b></td>
            </tr>
            @endforelse
        @endisset
      </tbody>
    </table>
    <br><br>

    <h3 class="text-danger">D. Les commandes d'un serveur donné </h3>

    <table class="table mt-5">
      <thead>
        <tr class="align-center">
          <th scope="col">ID Commande</th>
          <th scope="col">ID Serveur</th>
          <th scope="col">etat</th>
        </tr>
      </thead>
      <tbody>
          @isset($commandes)
            <tr class="align-center">
              @forelse($commandes as $commande)
                <td><b>{{$commande->id}}</b></td>
                <td>{{$commande->serveur_id}}</td>
                <td>
                  {{$commande->etat}}
                </td>
            </tr>
            
            @empty
            <tr>
              <td colspan="4" class="text-center"><b>DATA VIDE :(</b></td>
            </tr>
            @endforelse
        @endisset
      </tbody>
    </table>


    <h3 class="text-danger mt-5">E- Les plats d'une commande donnée    </h3>


    <table class="table mt-5">
      <thead>
        <tr class="align-center">
          <th scope="col">ID Commande</th>
          <th scope="col">ID PLAT</th>
          <th scope="col">Nombre</th>
        </tr>
      </thead>
      <tbody>
          @isset($plats_Commande)
            <tr class="align-center">
              @forelse($plats_Commande as $plat_Com)
                <td><b>{{$plat_Com->id}}</b></td>
                <td>{{$plat_Com->id}}</td>
                <td>
                  {{$plat_Com->pivot->nombre}}
                </td>
            </tr>
            
            @empty
            <tr>
              <td colspan="4" class="text-center"><b>DATA VIDE :(</b></td>
            </tr>
            @endforelse
        @endisset
      </tbody>
    </table>


    <h3 class="text-danger mt-5">F- Les plats à préparer pour toutes les commandes « en cours »  </h3>
    @isset($plat_encour)
      @foreach ($plat_encour as $plat_encour)
          <ul>
            <li>{{$plat_encour->id}}</li>
            <li>{{$plat_encour->intitule}}</li>
          </ul>
      @endforeach
    @endisset


    <h3 class="text-danger mt-5">g- Les commandes en état « servi » et non payées </h3>

    @isset($commande_nonpayer)
      @foreach ($commande_nonpayer as $cmd_noP)
          <ul>
            <li>{{$cmd_noP->paye}}</li>
            <li>{{$cmd_noP->etat}}</li>
          </ul>
      @endforeach
    @endisset


          <h3 class="text-danger">h. Les commandes où on a demandé plus de 5 plats différents : </h3>
          @isset($commande_plus5)
              @foreach ($commande_plus5 as $cmd_plus)
                  <ul>
                    <li>{{$cmd_plus->id}}</li>
                  </ul>
              @endforeach
          @endisset

          <h3 class="text-danger">i. Le montant total à payer pour une commande donnée ($commande)</h3>
          
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>