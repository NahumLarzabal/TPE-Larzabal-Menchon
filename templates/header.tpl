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
<div class="pagina"> <!-- NO CERRAR ESTE DIV -->
    <nav class="nav-list" id="nav-menu">
        <div class="top-nav-column">
            <img src="./img/logo.png" id="img-logo" alt="">
        </div>
        <div class="list-nav-column">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="libros">Listado de Libros</a>
                </li>
                {if isset($email)}
                <li class="nav-item">
                    <a class="nav-link" href="generos">Generos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="libros/agregarlibro">Cargar libro</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="generos/agregarCategoria">Cargar genero</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout">Cerrar sesion</a>
                </li>
                {else}
                    <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
            {/if}

            </ul>
        </div>
    </nav>

<div class="content">
    <header>
        <div class="btn-nav">
            
            <svg id="btn-menu" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">;
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>;
            </svg>
            
        </div>
        <div class="title">
            <h1>Libreria ChoLarz</h1>
        </div>
        <div class="login">
            {if isset($email)}
            <span class="margin-right-10px">Hola {$email}</span>
            
            <a class="btn btn-outline-secondary btn-sm" href="logout">Logout </a>
            {else}
            <a class="btn btn-outline-primary btn-sm" href="login">Login </a>
            {/if}
        </div>   
    </header>
    
