"use strict"
let api = new Vue({
    el: "#apiComentarios",
    data: {
        titulo: "este es el titulo",
        comments: [],
    },
    methods: {
        commentDelete:async function (id_comment){
            let id_libro = document.querySelector(".id_libro").value;
              console.log( "entre"+ id_comment, id_libro);
            try {
                let res = await fetch(`api/libros/${id_libro}/comentarios/${id_comment}`,{
                method: "DELETE",
            });
             if( res.status == 204){

                 Comments();
               console.log("Borrardo");
             }
            
          } catch (error) {
            console.log(error);
          }
        
          }
        
          }
});


    
       


const idApi = document.querySelector("#idApi").value;
const url = "api/libros";
//  `api/libros/${idApi}/comentarios`



Comments();

async function Comments(){
    try {
        let res = await fetch(`${url}/${idApi}/comentarios`);
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
    let nombre_apellido = document.querySelector(".nombreUserID");
    let puntuacion = document.querySelector(".puntuacion");
    return { comentarios: comentario.value,
       id_libro: id_libro.value,
       id_user: nombre_apellido.value,
       puntuacion: puntuacion.value}
   }
   let btn = document.querySelector("#btn-insertComment");
   if(btn){

       btn.addEventListener("click",insertComment);
   }
   
 

   async function insertComment(){

       let comment = campForm();

       console.log(comment);
       try {
        let res = await fetch(`${url}/${idApi}/comentarios`, {
               method: "POST",
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
  


