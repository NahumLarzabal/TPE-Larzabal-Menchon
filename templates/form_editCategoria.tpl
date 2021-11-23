{include file='templates/header.tpl'}
<div class="container-table">
    <h1>{$titulo}</h1>  
    <form class="form-edit-categoria" action="editCategoria" method="post">
    {foreach from=$categorias item=$genero}
        <input name="id_categoria" type="hidden" value="{$genero->id_categoria}">
   
        <input placeholder="nombre nuevo" class="input-edit" type="text" name="categoria" value="{$genero->categoria}">  
    {/foreach}
        <input type="submit" class="btn btn-primary" value="Editar"> 
    </form>
    {include file='templates/anuncio.tpl'}
</div>
{include file='templates/footer.tpl'}