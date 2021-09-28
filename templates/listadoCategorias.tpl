{include file='templates/header.tpl'}
<div class="container-table">
<div class="main-page">
        <div class="new-libro">
            <h1>Listado de categorias</h1>
            <div class="btn-libro">
                <a  href="showCategoria">
                <button class="btn btn-primary" id="btn-list-libro">Nueva Categoria</button> 
                </a>
            </div>        
        </div>
            <div class="title-table">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span id="id-libro">ID</span>
                        <span id="titulo-libro">Genero</span>
                        <span id="btn-libro-delete">Borrar</span>
                        <span id="btn-libro-edit" class="btn-edit-margin">Editar</span>
                    </li>
                </ul>
            </div>
            <!--                        OJO ACA!                       -->
            <!-- HAY QUE HACER UNA TABLA O SE PUEDE UNA LISTA? REVISAR PAUTAS DEL TPE -->
            <div class="main-table">
                <ul class="list-group">
                    {foreach from=$categorias item=$categoria}
                        <li class="list-group-item">
                                <span>{$categoria->id_categoria}</span>
                                <span>{$categoria->categoria}</span>
                                <a class="btn btn-danger" href="deleteCategoria/{$categoria->id_categoria}" id="btn-categoria-delete">Borrar</a>
                                <a class="btn btn-success" href="showCategoriaEdit/{$categoria->id_categoria}" id="btn-categoria-edit">Edit</a>                           
                        </li>
                    {/foreach}
                </ul>
            </div>
    </div>
</div>
 
{include file='templates/footer.tpl'}