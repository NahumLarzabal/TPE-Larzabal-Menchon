<input class="id_libro" value="{$libro->id}" type="hidden">
{literal}
  <div>
    <div :id="comment.id"  v-for="comment in comments">
    <input class="idcomment" :value="comment.id" type="hidden">

      <span>
      Posteado por: {{comment.nombre_apellido}}
      </span>
      <p>
      Comentario: {{ comment.comentarios }}
      </p>
      <span>
      la puntuacion es :{{comment.puntuacion}}
      </span>
      <p>id comentario{{comment.id}} id libro{{comment.id_libro}}</p>
      <button type="click" id="btn-delete">
      
      <a  :href="`api/libros/${comment.id_libro}/comentarios/${comment.id}`">Delete</a>
      </button>
    </div>
  
  </div>
  

  {/literal}