<input class="id_libro" value="{$libro->id}" type="hidden">
{literal}
  <div>
<<<<<<< HEAD
    <div v-for="comment in comments">
      <span>
        Posteado por: {{comment.nombre_apellido}}
      </span>
      <p>
        Comentario: {{ comment.comentarios }}
      </p>
      <span>
        la puntuacion es: {{comment.puntuacion}}
      </span>
      </div>
      <span>
        <a> a puntuacion es: {{comment.id_libro}}</a>
      </span>
    </div>
=======
    <div class="idcomment" :value="comment.id" :id="comment.id"  v-for="comment in comments">

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
      
       
       <a class="idcomment btn btn-outline-danger btn-sm" :value="comment.id" v-on:click="commentDelete(comment.id)"><i class="fas fa-trash-alt"></i></a>
      </div>
    {/literal}
  
>>>>>>> 9304d6be3b5206a7758dbdd486ce8087ed380466
  </div>
 
 
