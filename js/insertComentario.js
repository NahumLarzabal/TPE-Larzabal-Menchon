/******************************** Insert ***************************************/
"use strict"
// let apiInsert = new Vue({
//     el:"#apiInsertComment",
//     data:{
//         comments:[],
//     }
//     });

    function campForm(){
     let comentario = document.querySelector(".comentario");
     let id_libro = document.querySelector(".id_libro");
     let nombre_apellido = document.querySelector(".nombreUser");
     let puntuacion = document.querySelector(".puntuacion");
     return { comentarios: comentario.value,
        id_libro: id_libro.value,
        nombre_apellido: nombre_apellido.value,
        puntuacion: puntuacion.value}
    }
    let btn = document.querySelector("#btn-insertComment");
    btn.addEventListener("click",insertComment);
    
   
function pepe(event){
    event.preventDefault();

    let comment = campForm();

    console.log(comment)
}
    async function insertComment(event){
            event.preventDefault();

        let comment = campForm();

        console.log(comment);
        try {
            let res = await fetch(urlApi(idApi), {
                method: "POST",
                mode: "cors",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(comment),
              });
              if (res.status == 201) {
                  //apiInsert.comments=comment;
                console.log("Subido");
              }
        } catch (e) {
            console.log(e)
        }
    }