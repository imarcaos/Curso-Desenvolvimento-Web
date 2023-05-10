/* ----------------------------------------------------------------------------

Exercício: 012
Enunciado:
    Ao clicar no botão "Adicionar", se o input de texto não estiver vazio, adicionar
    um parágrafo com esse texto por baixo do botão.
---------------------------------------------------------------------------- */

/*
Date: 2023-05-10
*/

//----
// info: input #text_post , button .btn, div text #posts


document.querySelector('.btn').addEventListener('click', () => {

    let texto = document.querySelector('#text_post').value
    if (texto !== '') {
        let p = document.createElement('p')
        p.textContent = texto
        document.querySelector('#posts').appendChild(p)
    }
})