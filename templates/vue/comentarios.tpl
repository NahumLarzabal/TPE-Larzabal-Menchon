<input class="id_libro" value="{$libro->id}" type="hidden">
<input type="hidden"  class ="rol" value="{$rol}">
{if $rol == "4" || $rol == "3"}
  {literal}
  <div>
    <div class="idcomment" :value="comment.id" :id="comment.id"  v-for="comment in comments">
      <span>
      Posteado por: {{comment.nombre_apellido}}
      </span>
      <p>
      Comentario: {{ comment.comentarios }}
      </p>
      <span>
      la puntuacion es :{{comment.puntuacion}}
       <p>{{comment.tipoUser}}</p>
      </span>    
      </div>

    {/literal}
{else}
{literal}
  <div>
    <div class="idcomment" :value="comment.id" :id="comment.id"  v-for="comment in comments">
      <span>
        Posteado por: {{comment.nombre_apellido}}
      </span>
      <p>
        Comentario: {{ comment.comentarios }}
      </p>
      <span>
      la puntuacion es :{{comment.puntuacion}}
       <p>{{comment.tipoUser}}</p>
      </span>
      <!-- id comentario{{comment.id}} id libro{{comment.id_libro}} para saber su agarraba bien el comentario y el libro -->
    
       <a class="idcomment btn btn-outline-danger btn-sm" :value="comment.id" v-on:click="commentDelete(comment.id)">
       <i  class="fas fa-trash-alt"></i>
       </a>
      </div>

    {/literal}
  {/if}
  </div>