<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animalitos V Region</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/inicio.css">

    <style>
        h1 { color: #ca1a1a; }
        p { color: #ca1a1a }
      </style>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('index')}}">Inicio</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="" id="btn-catalogo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catalogo
                    </a>
                    <div class="dropdown-menu" aria-labelledby="btn-catalogo">
                        <a class="dropdown-item" href="#">Fotografias</a>
                        <a class="dropdown-item" href="#">Videos</a>
                    </div>
                </li>
                <li class="nav-item active" href="">
                    <a class="nav-link" href="">Chat</a>
                </li>
                <li class="nav-item active" href="">
                    <a class="nav-link" href="">Noticias</a>
                </li>
                <li class="nav-item active" href="">
                    <a class="nav-link" href="">Patrocinadores</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Busqueda">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                  </form>
                <li class="nav-item active" href="">
                    <a class="nav-link" href="{{route('login')}}">iniciar sesion</a>
                </li>
                <li class="nav-item active" href="">
                    <a class="nav-link" href="{{route('registro')}}">registrarse</a>
                </li>
            </ul>
        </div>
    </nav> 
    <div class="p-2">
        @yield('contenido-principal')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>