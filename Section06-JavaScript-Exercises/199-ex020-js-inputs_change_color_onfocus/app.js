/* ----------------------------------------------------------------------------

Exercício: 020
Enunciado:
    Existem 4 inputs na página.
    Sempre que o focus de um input for alterado, a cor de fundo do input
    deve ficar amarela, indicando que o input está ativo.
    Os inativos devem ficar a branco.
---------------------------------------------------------------------------- */
/*
Date: 2023-05-22
*/

//----
// info: name="text_1 ~ 4"

// // My Code
// let text_input = document.querySelectorAll('[name*="text_"]');
// text_input.forEach((it) => {
//     it.addEventListener('click', (it) => {
//         all_white();
//         it.target.style.backgroundColor = "yellow";
//     })
// })

// function all_white() {
//     text_input.forEach(it => {
//         it.style.backgroundColor = "white";
//     })
// }

// Teacher's Code
document.querySelectorAll('[name*="text_"]').forEach(e => {
    e.addEventListener('focus', () => {
        e.style.backgroundColor = "yellow"
    })
    e.addEventListener('blur', () => {
        e.style.backgroundColor = "white"
    })
})