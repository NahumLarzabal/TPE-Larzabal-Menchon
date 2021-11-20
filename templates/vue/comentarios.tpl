<input class="id_libro" value="{$libro->id}" type="hidden">
<input type="hidden"  class ="rol" value="{$rol}">
    <div>
    <select  name="" id="ordenamiento">
    <option  value="DESC">Ultimo</option>
    <option  value="ASC">Mas viejo</option>
    </select>
    <label for="">Puntaje</label>
    <select name="" id="puntajeInput">
    <option value="0">#</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
    <button type="click"  class="orderby"><i class="fas fa-search"></i></button>
    </div>
  <div>
    <div class="idcomment" :value="comment.id" :id="comment.id"  v-for="comment in comments">
  {literal}
    <ul>
    <li>
      <span>
      Posteado por:{{comment.nombre_apellido}}
      </span>
    </li>
    <li>
      <p>
      Comentario: {{ comment.comentarios }}
      </p>
    </li>
    <li>
      <span>
      calificacion :{{comment.puntuacion}}
      <span id="Estrellas"></span>
      </span>    
    </li>
    {/literal}
{if $rol == "1" || $rol == "2"}
   <li>    
       <button class="idcomment btn btn-outline-danger btn-sm" :value="comment.id" v-on:click="commentDelete(comment.id)">
       <i  class="fas fa-trash-alt"></i>
       </button>
    </li>
  {/if}
    </ul>
      </div>
     

  </div>