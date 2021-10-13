{include file='templates/header.tpl'}
<div class="contenedor-general"> 
        <div class="content-top-page">
            <div class="content-title">
                <h1>{$titulo}</h1>
            </div>
            {include file='templates/formSearch.tpl'}
        </div>
        <div class="main-table">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Autor</th>
                    {if isset($email)}
                    <th scope="col">Precio</th>
                    <th scope="col">Borrar</th>
                    <th scope="col">Editar</th>
                    {/if}
                </tr>
                </thead>
                <tbody>
                    {foreach from=$libros item=$libro}
                        <tr>
                            <td scope="row"><a href="viewLibro/{$libro->id}" id="titulo-libro">{$libro->nombre_libro}</a></td>
                            <td id="genero-libro">{$libro->categoria|truncate:500}</td>
                            <td id="autor-libro">{$libro->autor}</td>
                            {if isset($email)}
                                <td id="precio-libro">{$libro->precio}</td>
                                <td><a class="btn btn-danger" href="deleteLibro/{$libro->id}" id="btn-libro-delete"><i class="fas fa-trash-alt"></i></a></td>
                                <td><a class="btn btn-success" href="editLibro/{$libro->id}" id="btn-libro-edit"><i class="far fa-edit"></i></a></td>
                            {/if}
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>

{include file='templates/footer.tpl'}