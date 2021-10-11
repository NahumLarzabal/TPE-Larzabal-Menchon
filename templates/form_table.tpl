{{include file='templates/header.tpl'}}
<div class="container-table">
    <div class="main-page">
        <div class="content-title">
            <h1>{$titulo}</h1>
        </div>
        <div class="new-libro">
            {include file='templates/formSearch.tpl'}
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
                {if isset($email)}
                    <span id="precio-libro">Precio</span>
                    <span id="btn-libro-delete">Borrar</span>
                    <span id="btn-libro-edit" class="btn-edit-margin">Editar</span>
                {/if}
            </li>
        </ul>
    </div>
    <div class="main-table">
        <ul class="list-group">
            {foreach from=$libros item=$libro}
                <li class="list-group-item">
                    <a href="viewLibro/{$libro->id}" id="titulo-libro">{$libro->nombre_libro}</a>
                    <a id="genero-libro">{$libro->categoria|truncate:500}</a> 
                    <a id="autor-libro">{$libro->autor}</a> 
                    {if isset($email)}
                        <a id="precio-libro">{$libro->precio}</a> 
                        <a class="btn btn-danger" href="deleteLibro/{$libro->id}" id="btn-libro-delete">Borrar</a>
                        <a class="btn btn-success" href="editLibro/{$libro->id}" id="btn-libro-edit">Edit</a>                           
                    {/if}
                </li>
            {/foreach}
        </ul>
    </div>
</div>

{{include file='templates/footer.tpl'}}