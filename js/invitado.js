"use strict"

let invitado = document.querySelector(".invitado");


invitado.addEventListener('click', loginInvitado);

function loginInvitado(){
    console.log("entre")
    let email = document.querySelector(".email");
    let invitado = document.querySelector(".password");
    email.value="invitado@gmail.com";
    invitado.value="invitado";
    console.log(email.value, invitado.value)

}
