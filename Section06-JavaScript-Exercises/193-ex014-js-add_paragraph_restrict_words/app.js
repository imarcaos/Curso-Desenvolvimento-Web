/* ----------------------------------------------------------------------------

Exercício: 014
Enunciado:
    Ao clicar no botão "Adicionar", se o input de texto não estiver vazio, adicionar
    um parágrafo com esse texto por baixo do botão.
    Depois da inserção com sucesso, o input deve ser limpo e receber o focus para
    nova inserção.
    Não são permitidas as palavras "teste", "obrigado" e "hoje"
---------------------------------------------------------------------------- */

/*
Date: 2023-05-12
*/

//----
// info: input #text_post , button .btn, div text #posts

// my code
// let restrict_words = ["teste", "obrigado", "hoje"]

// document.querySelector('.btn').addEventListener('click', () => {
//     let input = document.querySelector('#text_post')
//     if (input.value !== '' && !verify_restrict_words(input.value)) {
//         let p = document.createElement('p')
//         p.textContent = input.value
//         document.querySelector('#posts').appendChild(p)
//     }
//     input.value = ''
//     input.focus()
// })

// function verify_restrict_words(w) {
//     let count_words = restrict_words.length
//     let ok = false
//     for (i = 0; i < count_words; i++) {
//         // console.log(restrict_words[i])
//         if (w == restrict_words[i]) {
//             ok = true
//         }
//     }
//     return ok
// }

//Teacher's code
let nok = ["teste", "obrigado", "hoje"];
document.querySelector('.btn').addEventListener('click', () => {
    let input = document.querySelector('#text_post');
    if (input.value !== '') {
        if (!nok.includes(input.value)) {
            let p = document.createElement('p');
            p.textContent = input.value;
            document.querySelector('#posts').appendChild(p);
            input.value = '';
            input.focus();
        }
    }
})