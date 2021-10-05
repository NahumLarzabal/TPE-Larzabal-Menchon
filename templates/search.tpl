{{include file='templates/header.tpl'}}
<div class="container-table">
<div class="main-page">
{* en este include traeme la barra del buscador *}
{{include file='templates/formSearch.tpl'}} 
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
<div class="main-table">
    <ul class="list-group">
        {foreach from=$libros item=$libro}
            <li class="list-group-item">
                    <a href="viewLibro/{$libro->id}" id="titulo-libro">{$libro->nombre_libro}</a>
                    <a id="genero-libro" {foreach from=$categorias  item=$genero}
                        {if {$genero->id_categoria} == {{$libro->id_categoria}}}
                        >{$genero->categoria}</a>     
                    {/if} {/foreach}
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
{{include file='templates/footer.tpl'}}