/* ----------------------------------------------------------------------------

Exercício: 027
Enunciado:
    Existe um input de texto no qual, sempre que for alterado o seu conteúdo,
    o mesmo deve ser apresentado em tempo real no div cujo id é igual a "conteudo".
    Contudo, se o texto contém a palavra "olá", a cor do texto deve ser verde.
    Caso contrário deverá ser sempre branca.
---------------------------------------------------------------------------- */
/*
Date: 2023-05-25
*/

//----
// input type="text" id="text_frase"
// div id="conteudo"

const conteudo = document.querySelector("#conteudo");
document.querySelector("#text_frase").addEventListener('input', (e) => {
    conteudo.textContent = e.target.value;
    conteudo.style.color = e.target.value.includes('olá') ? 'green' : 'white';
})