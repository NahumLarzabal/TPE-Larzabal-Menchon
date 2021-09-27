"use strict";

let selectFilter = document.getElementById("filter-table");
let selectGenero = document.getElementById("select-genero");
let selectAutor = document.getElementById("select-autor");
let selectTitulo = document.getElementById("select-titulo");
console.log(selectFilter);


function filtrarTabla(){
    console.log(selectFilter.value);
    if (selectFilter.value == "titulo") {
        selectTitulo.classList.toggle("invisible");
        selectGenero.classList.add("invisible");
        selectAutor.classList.add("invisible");
    } else if (selectFilter.value == "genero") {
        selectTitulo.classList.add("invisible");
        selectGenero.classList.toggle("invisible");
        selectAutor.classList.add("invisible");
    } else if (selectFilter.value == "autor") {
        selectTitulo.classList.add("invisible");
        selectGenero.classList.add("invisible");
        selectAutor.classList.toggle("invisible");
    }
    // switch (selectFilter.value) {
    //     case "titulo":
    //         toggleClass();
    //         break;
    //     case "genero":
    //         toggleClass();
    //         break;
    //     case "autor":
    //         toggleClass();
    //         break;
    //     default:
    //         break;
    // }
}
            
// function toggleClass(){
// }

selectFilter.addEventListener("change", filtrarTabla);