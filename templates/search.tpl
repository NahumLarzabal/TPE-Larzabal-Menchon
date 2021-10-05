{include file='templates/header.tpl'}
<div class="main-table">
    <ul class="list-group">
        {foreach from=$categorias item=$libro}
            <li class="list-group-item">
                    <a href="viewLibro/{$libro->id}" id="titulo-libro">{$libro->nombre_libro}</a>
                    <a id="genero-libro">{$libro->id_categoria}</a> 
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
{include file='templates/footer.tpl'}