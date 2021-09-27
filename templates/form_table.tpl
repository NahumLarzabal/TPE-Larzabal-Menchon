{include file='templates/header.tpl'}
<div class="container-table">
<div class="main-page">
        <div class="new-libro">
            <h1>{$titulo}</h1>
            <div class="btn-libro">
                <select type="text" name="filtrado-libros" class="form-select" aria-label="Default select example" placeholder="Indique el genero">
                    {foreach from=$libros item=$libro}
                        <option>
                            {$libro->categoria|truncate:500}
                        </option>
                    {/foreach}
                </select>
                <a>
                <button href="filtroLibro" class="btn btn-secondary" id="btn-list-libro">Filtrar</button> 
                </a>
                <a  href="agregarlibro">
                <button class="btn btn-primary" id="btn-list-libro">Nuevo Libro</button> 
                </a>
                <a  href="editlibro" >
                <button class="btn btn-success" id="btn-list-libro">Editar Libros</button> 
                </a>
            </div>        
        </div>
            <div class="title-table">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span id="titulo-libro">Titulo</span>
                        <span id="genero-libro" class="edit-margin">Genero</span>
                        <span id="autor-libro">Autor</span>
                        <span id="precio-libro">Precio</span>
                        <span id="btn-libro-delete">Borrar</span>
                        <span id="btn-libro-edit" class="btn-edit-margin">Editar</span>
                    </li>
                </ul>
            </div>
            <!--                        OJO ACA!                       -->
            <!-- HAY QUE HACER UNA TABLA O SE PUEDE UNA LISTA? REVISAR PAUTAS DEL TPE -->
            <div class="main-table">
                <ul class="list-group">
                    {foreach from=$libros item=$libro}
                        <li class="list-group-item">
                                <a href="viewLibro/{$libro->id}" id="titulo-libro">{$libro->nombre_libro}</a>
                                <a id="genero-libro">{$libro->categoria|truncate:500}</a> 
                                <a id="autor-libro">{$libro->autor}</a> 
                                <a id="precio-libro">{$libro->precio}</a> 
                                <a class="btn btn-danger" href="deleteLibro/{$libro->id}" id="btn-libro-delete">Borrar</a>
                                <a class="btn btn-success" href="editLibro/{$libro->id}" id="btn-libro-edit">Edit</a>                           
                        </li>
                    {/foreach}
                </ul>
            </div>
    </div>
</div>
 
{include file='templates/footer.tpl'}