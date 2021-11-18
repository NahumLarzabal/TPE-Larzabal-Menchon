<div class="">
<input class="nombreUserID" value="{$user}" type="hidden">
<input class="nombreUser" value="{$email}" type="hidden">
<input class="id_libro" value="{$libro->id}" type="hidden">
</div>
 {literal} 
    <div>
      <form action="">
         <label for="">Comentario</label>
         <textarea id="wmd-input" name="post-text" class="textComent comentario wmd-input s-input bar0 js-post-body-field" ></textarea>
         <label for="">Calificacion</label>
         <input class="puntuacion" type="hidden" disabled>
         <span id="Estrellas"></span>
         <button id="btn-insertComment" type="click">Enviar</button>
      </form>
    </div>

 {/literal} 
