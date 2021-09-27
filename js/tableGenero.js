"use strict";

let selectGenero = document.querySelector("#tableGenero");
let btnGenero=document.querySelector("#btnGenero");
btnGenero.addEventListener("click",buscador_tabla); 
console.log(selectGenero);
// {foreach from=$categorias item=$libro}
//                             <option>
//                                 {$libro->categoria|truncate:500}
//                             </option>{/foreach}
// let classAdd = selectGenero.classList.add(".invisible");
// let classRemove = selectGenero.classList.remove(".invisible")

function buscador_tabla(){
    console.log("pepe");
    console.log(selectGenero.value);
if (selectGenero.value == "genero") {
    selectGenero.classList.toggle(".invisible");

}
}