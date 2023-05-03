/* ----------------------------------------------------------------------------

Exercício: 008
Enunciado:
    Existem 5 botões, cada um com uma cor diferente do Bootstrap.
    A ideia é criar o código javascript que permita que o clique em cada
    um dos botões altere o texto acima para a cor de fundo do botão.
---------------------------------------------------------------------------- */

/*
Date: 2023-05-03
h3 - text
btn1 ~ tnb5 - buttons
*/

// My Code
// document.querySelectorAll("button").forEach((btn) => {
//     btn.addEventListener('click', (btn) => {
//         button_select(btn.target.id.substring(3))
//     })
// })

// function button_select(id) {
//     // console.log(id)
//     let rgb_color = ""
//     if (id == 1) {
//         rgb_color = "#2a9fd6" // blue
//     } else if (id == 2) {
//         rgb_color = "#93c" // purple
//     } else if (id == 3) {
//         rgb_color = "#77b300" // green
//     } else if (id == 4) {
//         rgb_color = "#c00" // red 
//     } else if (id == 5) {
//         rgb_color = "#f80" // orange 
//     }
//     document.querySelector("h3").style.color = rgb_color
// }

// Teacher Code (ele não explicou, mas acredito ter ido buscar as cores e outras funções no bootstrap)
const cores = ['primary', 'info', 'success', 'danger', 'warning'];
document.querySelectorAll('[id*="btn"]').forEach((btn) => {
    btn.addEventListener('click', (btn) => {
        let index = btn.target.id.substring(3, 4) - 1; // busca do 3 ao 4 e reduz 1 unidade (ex. se for 1 fica 0)
        document.querySelector("h3").className = "text-" + cores[index];
    })
})