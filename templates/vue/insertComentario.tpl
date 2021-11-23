<div class="">
<input class="nombreUserID" value="{$user}" type="hidden">
<input class="nombreUser" value="{$email}" type="hidden">
<input class="id_libro" value="{$libro->id}" type="hidden">
</div>
 {literal}
 <div class="insertCommentForm">
    <div>
      <form class="row g-3"  action="">
      <div class="col-md-6 form-floating">
      <textarea class="form-control comentario" placeholder="Comentario" id="floatingTextarea2" name="post-text"></textarea>
      <label for="floatingTextarea2">Comentario</label>
      </div>
      <div class ="col-md-4">
         <label id="Estrellas" for="floatingTextarea2">Calificacion: </label>
         <span ></span>
         <button id="btn-insertComment" class="btn btn-primary" type="click">Enviar</button>
      </div>
         <input class="puntuacion" type="hidden" disabled>
      </form>
      <div class="insertCommentForm2">
      Filtrar
         <select class="w-13" name="" id="ordenamiento">
            <option  value="DESC">Ultimo</option>
            <option  value="ASC">Mas viejo</option>
         </select>
         <label for="">Puntaje</label>
         <select class="w-7" name="" id="puntajeInput">
            <option value="0">#</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
         </select>
         <a type="click"  class="orderby btn btn-secondary"><i class="fas fa-search"></i></a>
      </div>
 </div> 
    </div>

 {/literal} 
