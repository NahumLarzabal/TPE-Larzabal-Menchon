{literal}
  <div>
    <div v-for="comment in comments">
    <span>
    Posteado por: {{comment.nombre_apellido}}
    </span>
    <p>
    Comentario: {{ comment.comentarios }}
    </p>
    <span>
    la puntuacion es :{{comment.puntuacion}}
    </span>
    </div>
  
  </div>
  

  {/literal}