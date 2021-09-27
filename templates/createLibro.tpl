{include file='templates/header.tpl'}
<div class="container-table">
    <div class="main-page">
        <div class="new-libro">
            <h1>Crear libro</h1>
            <div class="btn-libro">
                <a href="home">
                    <button class="btn btn-primary" id="btn-list-libro">Listado de libros</button> 
                </a>
                <a href="editLibro/1">
                    <button class="btn btn-success" id="btn-list-libro">Editar Libros</button> 
                </a>
            </div>    
        </div>    
        <div class="form-create-libro">
            <!-- <form class="form-alta" action="createLibro" method="post">
                <div class="form-top">
                    <input placeholder="nombre del libro" type="text" name="nombre_libro" id="nombre_libro" required>
                    <input placeholder="autor" type="text" name="autor" id="autor">
                    <input placeholder="precio" type="number" name="precio" id="precio">
                </div>
                <div>

                    <select name="id_categoria" id="id_categoria">
                        {foreach from=$categorias  item=$genero}
                        <option value={$genero->id_categoria}>{$genero->categoria}</option>
                        {/foreach}
                    </select>
                </div>
                    <textarea placeholder="descripcion" type="text" name="description" id="description"> </textarea>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form> -->

            <form class="form-alta" action="createLibro" method="post">
                <div class="mb-3">
                  <label class="form-label">Titulo del libro</label>
                  <input type="text" class="form-control">
                  <div id="emailHelp" class="form-text">Maximo 180 caracteres.</div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Autor del libro</label>
                  <input type="text" class="form-control">
                  <div id="emailHelp" class="form-text">Nombre - Apellido.</div>
                </div>
                <div class="form-genero">
                    <label class="form-label">Genero del libro</label>
                    <select class="form-select">
                        {foreach from=$categorias  item=$genero}
                        <option value={$genero->id_categoria}>{$genero->categoria}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Descripcion</label>
                  <textarea type="text" class="form-control" id="exampleInputPassword1"></textarea>
                  <div id="emailHelp" class="form-text">Maximo 500 caracteres.</div>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Confirmo agregar el libro</label>
                </div>
                <div class="submit-create">
                    <button type="submit" class="btn btn-primary" value="Guardar" id="submit-create-libro">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>
{include file='templates/footer.tpl'}
