{include file='templates/header.tpl'}
<div class="container-table">
    <h1>{$titulo}</h1>  
    <form class="form-alta" action="edit" method="post">
    <input name="id" type="hidden" value="{$libro->id}">
        <div class="mb-3">
                          <label class="form-label">Titulo del libro</label>
                          <input type="text" class="form-control" name="nombre_libro" value="{$libro->nombre_libro}" id="nombre_libro">
                          <div id="emailHelp" class="form-text">Maximo 180 caracteres.</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Autor del libro</label>
                          <input type="text" class="form-control"name="autor" value="{$libro->autor}" id="autor">
                          <div id="emailHelp" class="form-text">Nombre - Apellido.</div>
                        </div>
                        <div class="form-genero">
                            <label class="form-label">Genero del libro</label>
                            <select class="form-select" name="id_categoria" id="id_categoria">
                                {foreach from=$categorias  item=$genero}
                                <option 
                                {if {$genero->id_categoria} == {{$id_genero->id_categoria}}}
                                    
                                    selected={$genero->id_categoria}
                                    
                                {/if} 
                                value={$genero->id_categoria} >{$genero->categoria}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Descripcion</label>
                          <textarea type="text" class="form-control" id="descripcion" name="descripcion"> {$libro->descripcion}</textarea>
                          <div id="emailHelp" class="form-text">Maximo 500 caracteres.</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Precio</label>
                          <input type="number" class="form-control" id="precio" value="{$libro->precio}" name="precio">
                          <div id="emailHelp" class="form-text">Precio en $.</div>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Confirmo agregar el libro</label>
                        </div>
                        <div class="submit-create">
                            <button type="submit" class="btn btn-primary" value="Editar" id="submit-create-libro">Editar</button>
                        </div>
        </div>
    </form> 
</div>
{include file='templates/footer.tpl'}

