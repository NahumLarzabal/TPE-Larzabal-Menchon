<div class="">
<input class="nombreUser" value="{$user}" type="hidden">
<input class="id_libro" value="{$libro->id}" type="hidden">
</div>
 {literal} 
    <div>
    <form action="">
    <label for="">Comentario</label>
    <input class="comentario" type="textarea">
    <label for="">Puntuacion</label>
    <input class="puntuacion" type="number" maxlength="5">
    <button id="btn-insertComment" type="click">Enviar</button>
    </form>
    </div>
    
 {/literal} 