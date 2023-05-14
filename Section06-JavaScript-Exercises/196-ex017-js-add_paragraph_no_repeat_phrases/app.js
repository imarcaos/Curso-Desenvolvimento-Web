/* ----------------------------------------------------------------------------

Exercício: 017
Enunciado:
    Ao clicar em "Adicionar", se o input tiver texto, adicionar o mesmo num
    parágrafo por baixo do botão.

    Não pode ser adicionada uma palavra ou frase repetida.
---------------------------------------------------------------------------- */

/*
Date: 2023-05-14
*/

//---- correção do Readme
// info: input #text_post , button .btn, div text #posts

let word_list = [];

document.querySelector('.btn').addEventListener('click', () => {
    let input = document.querySelector("#text_post");
    if (input.value !== '') {
        if (!word_list.includes(input.value)) {
            let p = document.createElement('p');
            p.textContent = input.value;
            word_list.push(input.value);
            document.querySelector("#posts").appendChild(p);
            input.value = '';
            input.focus();
        } else {
            input.value = '';
            input.focus();
        }
    }
})