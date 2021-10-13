{include file='templates/header.tpl'}

<div class="container">
    <h1 class="mb-4">{$libro->nombre_libro}</h1>
    <h2>Autor: {$libro->autor}</h2>
    <h2>Genero: {$libro->categoria}</h2>
    <h2>Precio: {$libro->precio}</h2>
    <h2>Descripcion: {$libro->descripcion}</h2>

    <a href="libros" > Volver </a>
</div>

{include file='templates/footer.tpl'}
