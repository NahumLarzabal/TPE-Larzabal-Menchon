{include file='templates/header.tpl'}
<div class="container">
<div class="row mt-4">
        <div class="col-md-4">
        <a href="agregarlibro">Nuevo</a> 
    </div>
        <div class="col-md-8">
            <h1>{$titulo}</h1>

            <ul class="list-group">
                {foreach from=$libros item=$libro}
                    <li class="list-group-item">
                            <a href="viewLibro/{$libro->id}">{$libro->nombre_libro}</a> 
                            {$libro->categoria|truncate:500} | {$libro->autor} | {$libro->precio}
                            <a class="btn btn-danger" href="deleteLibro/{$libro->id}">Borrar</a>
                            
                                <a class="btn btn-success" href="editLibro/{$libro->id}">Edit</a>                           
                            
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>

</div>
 
{include file='templates/footer.tpl'}