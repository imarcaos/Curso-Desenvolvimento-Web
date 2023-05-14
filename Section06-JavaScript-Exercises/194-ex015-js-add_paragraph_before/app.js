/* ----------------------------------------------------------------------------

Exercício: 015
Enunciado:
    Ao clicar em "Adicionar", se o input tiver texto, adicionar o mesmo num
    parágrafo por baixo do botão.

    As palavras e frases mais recentes devem ficar no topo.
---------------------------------------------------------------------------- */

/*
Date: 2023-05-14
*/

//----
// info: input #text_post , button .btn, div text #posts

document.querySelector(".btn").addEventListener('click', () => {
    let input = document.querySelector("#text_post");
    if (input.value !== '') {
        let p = document.createElement('p');
        p.textContent = input.value;
        document.querySelector("#posts").prepend(p);
        input.value = '';
        input.focus();
    }
})