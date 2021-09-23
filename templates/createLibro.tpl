{include file='templates/header.tpl'}
<h2>Crear Tarea</h2>
    <form class="form-alta" action="createLibro" method="post">
        <input placeholder="nombre del libro" type="text" name="nombre_libro" id="nombre_libro" required>
            
        <select name="id_categoria" id="id_categoria">
        {foreach from=$categorias  item=$genero}
        <option value={$genero->id_categoria}>{$genero->categoria}</option>
        {/foreach}
        </select>
            
        <input placeholder="autor" type="text" name="autor" id="autor">
        <input placeholder="precio" type="number" name="precio" id="precio">
        <textarea placeholder="descripcion" type="text" name="description" id="description"> </textarea>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>
<a href="home">Volver</a>
{include file='templates/footer.tpl'}
