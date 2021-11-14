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


addEventListener("click", deleteComment)
