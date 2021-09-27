<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylecss.css">

    <title>Libreria 2021</title>
</head>

<body>
<div class="pagina">
    <nav class="nav-list" id="nav-menu">
        <div class="top-nav-column">
            <span>ACA VA EL LOGO</span>
        </div>
        <div class="list-nav-column">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lista de libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lista de generos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Editar libro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cerrar sesion</a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <div class="btn-nav">
            <button id="btn-menu">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="title">
            <h1>Libreria 2021</h1>
        </div>
        <div class="login">
            <input type="text" placeholder="Usuario">
            <input type="password" placeholder="Contraseña">
            <button type="submit" class="btn btn-login">Login</button>
        </div>
    </header>
