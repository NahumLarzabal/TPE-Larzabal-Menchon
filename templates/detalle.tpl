{include file='templates/header.tpl'}
    <div class="content-top-page">
      <div class="content-title">
        <h1>Detalle del libro</h1>
      </div>
      <div class="btn-libro">
        <a href="libros">
          <button class="btn btn-primary" id="btn-list-libro">Listado de libros</button> 
        </a>
      </div>
    </div>


    <div class="container">
    <input id="idApi" class="id_libro" type="hidden" value="{$libro->id}">
      <div class="title">
          <h2 class="mb-4">Titulo:<span>{$libro->nombre_libro}</span></h2>
      </div>
      <div class="autor">
          <h2>Autor: <span>{$libro->autor}</span></h2>
      </div>

      {if !empty($libro->imagen)}
      <div class="portada">
          <h2>Portada: 
              <span>
                  <img src="{$libro->imagen}"/>
              </span>
          </h2>
      </div>
      {/if}

      <div class="genero">
        <h2>Genero: <span>{$libro->categoria}</span></h2>
      </div>

      <div class="precio">
        <h2>Precio: <span>${$libro->precio}</span></h2>
      </div>

      <div class="descripcion">
        <h2>Descripcion: {$libro->descripcion}</h2>
      </div>

      <div class="btn-volver">
        <a href="libros">Volver</a>
      </div>
    </div>
<h1>Comentarios</h1>

<div id="apiComentarios">
{include file='templates/vue/insertComentario.tpl'}
{include file='templates/vue/comentarios.tpl'}
{include file='templates/anuncio.tpl'}
<script src="./js/comentarios.js"></script>
{include file='templates/footer.tpl'}

</div>
