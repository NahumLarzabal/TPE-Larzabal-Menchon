{include file='templates/header.tpl'}
<div class="container-table">
<div class="main-page">
        <div class="new-libro">
            <h1>{$titulo}</h1>
            <div class="btn-libro">
            <div class="select-filtro">
            <select type="text" name="filtrado-libros" id="filter-table" class="form-select" aria-label="Default select example" >
                <option selected disabled>Elemento a filtrar</option>
                <option value="titulo">Titulo</option>
                <option value="genero">Genero</option>
                <option value="autor">Autor</option>
            </select>
               <input type="titulo" class="invisible" id="select-titulo" placeholder="Filtre por titulo">
               <input type="autor" class="invisible" id="select-autor" placeholder="Filtre por Autor">
            <select class="invisible" id="select-genero">
                {foreach from=$categorias item=$libro}
                <option>{$libro->categoria|truncate:500}</option>
                {/foreach}
            </select>
            </div>
                
                <a>
                <button href="filtroLibro" class="btn btn-secondary" id="btn-list-libro">Filtrar</button> 
                </a>
                {if isset($email)}
                    <a  href="agregarlibro">
                    <button class="btn btn-primary" id="btn-list-libro">Nuevo Libro</button> 
                    </a>
                {/if}
            </div>        
        </div>
            <div class="title-table">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span id="titulo-libro">Titulo</span>
                        <span id="genero-libro" class="edit-margin">Genero</span>
                        <span id="autor-libro">Autor</span>
                        <span id="precio-libro">Precio</span>
                        {if isset($email)}
                        <span id="btn-libro-delete">Borrar</span>
                        <span id="btn-libro-edit" class="btn-edit-margin">Editar</span>
                    {/if}
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
                                {if isset($email)}
                                    
                                    <a class="btn btn-danger" href="deleteLibro/{$libro->id}" id="btn-libro-delete">Borrar</a>
                                    <a class="btn btn-success" href="editLibro/{$libro->id}" id="btn-libro-edit">Edit</a>                           
                                {/if}
                        </li>
                    {/foreach}
                </ul>
            </div>
    </div>
</div>
 
{include file='templates/footer.tpl'}