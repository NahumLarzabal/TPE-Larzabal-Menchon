<input class="id_libro" value="{$libro->id}" type="hidden">
<input type="hidden"  class ="rol" value="{$rol}">
{if $rol == "4" || $rol == "3"}
  {literal}
  <div>
    <div class="idcomment" :value="comment.id" :id="comment.id"  v-for="comment in comments">
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
      <span>
      calificacion :{{comment.puntuacion}}
      <span id="Estrellas"></span>
      </span>    
    <li>
    </li>
    </ul>
      </div>

    {/literal}
{else}
{literal}
  <div>
    <div class="idcomment" :value="comment.id" :id="comment.id"  v-for="comment in comments">
    <ul>
    <li>
      <span>
        Posteado por: {{comment.nombre_apellido}}
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
    <li>
      <!-- id comentario{{comment.id}} id libro{{comment.id_libro}} para saber su agarraba bien el comentario y el libro -->
    
       <button class="idcomment btn btn-outline-danger btn-sm" :value="comment.id" v-on:click="commentDelete(comment.id)">
       <i  class="fas fa-trash-alt"></i>
       </button>
    </li>
    </ul>
      </div>

    {/literal}
  {/if}
  </div>