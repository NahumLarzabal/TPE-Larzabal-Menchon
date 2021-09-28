{include file='templates/header.tpl'}
<div class="container-table">
    <h1>{$titulo}</h1>  
    <form class="form-alta" action="edit" method="post">
    <input name="id" type="hidden" value="{$libro->id}">
        <input placeholder="nombre del libro"  type="text" name="nombre_libro" id="nombre_libro" value="{$libro->nombre_libro}" required>
                
        
        <select id="select-genero" name="id_categoria" >        
                {foreach from=$categorias item=$libro}
                        <option selected="true" value="{$libro->id_categoria}" >{$libro->categoria}</option>
                {/foreach}
            </select>
        
        <input placeholder="autor"  type="text" name="autor" id="autor" value="{$libro->autor}">
        <input placeholder="precio" type="number" name="precio" id="precio" value="{$libro->precio}">
        <textarea placeholder="descripcion"  type="text" name="descripcion" id="descripcion">{$libro->descripcion} </textarea>
        <input type="submit" class="btn btn-primary" value="Editar"> 
    </form>
</div>
{include file='templates/footer.tpl'}