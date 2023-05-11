/* ----------------------------------------------------------------------------

Exercício: 013
Enunciado:
    Ao clicar no botão "Adicionar", se o input de texto não estiver vazio, adicionar
    um parágrafo com esse texto por baixo do botão. O texto deve apresentar uma numeração
    sequencial e depois de inserido, o input deve ser limpo e receber o focus para
    nova inserção.
---------------------------------------------------------------------------- */

/*
Date: 2023-05-11
*/

//----
// info: input #text_post , button .btn, div text #posts

// //my code
// let counter = 0
// document.querySelector('.btn').addEventListener('click', () => {
//     let input_text = document.querySelector("#text_post").value

//     if (input_text !== '') {
//         counter++
//         let p = document.createElement('p')
//         p.textContent = counter + "." + input_text
//         document.querySelector('#posts').appendChild(p)
//     }
// })

// // Teacher's code
let index = 1;
document.querySelector(".btn").addEventListener('click', () => {
    let input = document.querySelector("#text_post");
    if (input.value !== '') {
        let p = document.createElement('p');
        p.textContent = `${index++}. ${input.value}`;
        document.querySelector('#posts').appendChild(p);
        input.value = '';
        input.focus();
    }
})