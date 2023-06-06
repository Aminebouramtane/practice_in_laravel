<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
      img{
        width:300px;
        height:300px;
        object-fit: cover;      }
    </style>
</head>
<body>
      <nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="{{route('menu') }}">Mon Resto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('menu') }}">Menu</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Présentation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Localisation et horaires</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
    <div class="container">
        @yield("contenu")
    </div>

<script src="{{ asset('js/bootstrap.min.js')}}"></script>
</body>
</html>