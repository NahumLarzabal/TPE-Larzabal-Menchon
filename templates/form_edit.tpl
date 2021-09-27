{include file='templates/header.tpl'}
<h1>{$titulo}</h1>
<div class="container">
<form class="form-alta" action="edit" method="post">
<input hidden name=id value="{$libro->id}">
        <input placeholder="nombre del libro" type="text" name="nombre_libro" id="nombre_libro" value="{$libro->nombre_libro}" required>
        {foreach from=$categorias  item=$genero}
        <input type="text" name="genero" id="genero"  value="{$genero->categoria}">
        {/foreach}
        <input placeholder="autor" type="text" name="autor" id="autor" value="{$libro->autor}">
        <input placeholder="precio" type="number" name="precio" id="precio" value="{$libro->precio}">
        <textarea placeholder="descripcion" type="text" name="descripcion" id="descripcion">{$libro->descripcion} </textarea>
        <input type="submit" class="btn btn-primary" value="Editar"> 
    </form>
</div>
<a href="home" > Volver </a>
{include file='templates/footer.tpl'}