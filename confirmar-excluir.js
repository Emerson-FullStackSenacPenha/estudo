'use strict';

/*
const links = document.querySelectorAll('.excluir');

for (const link of links){

    link.addEventListener("click", function(event){

        event.preventDefault();

        let resposta = confirm("Deseja realmente excluir este usuario ?");

        if(resposta){

            location.href = link.href;

        }

    })

};
*/

const excluirUsuario = document.querySelector("#excluir");

const jE = document.querySelector("#janelaExcluir");

excluirUsuario.addEventListener("click", function(){

    jE.showModal();

});