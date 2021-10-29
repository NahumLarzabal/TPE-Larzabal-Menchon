"use strict"
let api = new Vue({
    el: "#apiComentarios",
    data: {
        titulo: "este es el titulo",
        comments: [],
    }
});

const idApi = document.querySelector("#idApi").value;
function urlApi(idApi){
return `api/libros/${idApi}/comentarios`;
}

Comments();

async function Comments(){
    try {
        let res = await fetch(urlApi(idApi));
        let json = await res.json();
        api.comments = json;
        console.log(json);
        
    } catch (e) {
        console.log(e);
    }
}

function campForm(){
    let comentario = document.querySelector(".comentario");
    let id_libro = document.querySelector(".id_libro");
    let nombre_apellido = document.querySelector(".nombreUser");
    let puntuacion = document.querySelector(".puntuacion");
    return { comentarios: comentario.value,
       id_libro: id_libro.value,
       id_user: nombre_apellido.value,
       puntuacion: puntuacion.value}
   }
   let btn = document.querySelector("#btn-insertComment");
   btn.addEventListener("click",insertComment);
   
  

   async function insertComment(event){
           event.preventDefault();

       let comment = campForm();

       console.log(comment);
       try {
           let res = await fetch(urlApi(idApi), {
               method: "POST",
               // mode: "cors",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(comment),
             });
             if (res.status == 201) {
                 Comments();
               console.log("Subido");
             }
       } catch (e) {
           console.log(e)
       }
   }
  

  async function deleteComment(){
    let id_comment = document.querySelector(".idcomment").value;
      console.log( "entre"+ id_comment);
    try {
        let res = await fetch(`api/libros/${idApi}/comentarios/${id_comment}`,{
        method: "DELETE",
    });
    if (res.status == 204) {
      Comments();
      console.log("Borrardo");
    }
  } catch (error) {
    console.log(error);
  }

  }

  let btnDelete = document.querySelector("#btn-delete");
  btnDelete.addEventListener("click", deleteComment);

 