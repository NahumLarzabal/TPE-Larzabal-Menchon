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
                    <th scope="col">Precio</th>
                    {if isset($email) && ($rol == "1") || ($rol=="2")}
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
                            <td id="precio-libro">${$libro->precio}</td>
                            {if isset($email) && ($rol == "1") || ($rol=="2")}
                                <td><a class="btn btn-danger" href="deleteLibro/{$libro->id}" id="btn-libro-delete"><i class="fas fa-trash-alt"></i></a></td>
                                <td><a class="btn btn-success" href="editarLibro/{$libro->id}" id="btn-libro-edit"><i class="far fa-edit"></i></a></td>
                            {/if}
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
        {include file='templates/anuncio.tpl'}
    </div>
{include file='templates/footer.tpl'}
