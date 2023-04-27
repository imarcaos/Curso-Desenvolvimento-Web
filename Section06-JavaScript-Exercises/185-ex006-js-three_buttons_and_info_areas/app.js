/* ----------------------------------------------------------------------------

Exercício: 006
Enunciado:
    Existem 3 botões no layout. Cada botão está associado a uma área de
    informação. O objetivo é criar a lógica que permite apresentar cada
    uma das áreas de acordo com o botão clicado.
    A área de informação um deve estar visível por padrão.

    NOTA: quando uma área é apresentada, as outras devem ficar escondidas
---------------------------------------------------------------------------- */

// --------------
// My Code
// let default_info = 1
// // let max_info = 3
// set_info(default_info)

// document.querySelector('#tab1').addEventListener('click', () => {
//     set_info(1)
// })
// document.querySelector('#tab2').addEventListener('click', () => {
//     set_info(2)
// })
// document.querySelector('#tab3').addEventListener('click', () => {
//     set_info(3)
// })


// function set_info(i) {
//     console.log(i)
//     if (i == 3) {
//         document.querySelector("#info1").style.display = 'none'
//         document.querySelector("#info2").style.display = 'none'
//         document.querySelector("#info3").style.display = 'block'
//     } else if (i == 2) {
//         document.querySelector("#info1").style.display = 'none'
//         document.querySelector("#info2").style.display = 'block'
//         document.querySelector("#info3").style.display = 'none'
//     } else {
//         document.querySelector("#info1").style.display = 'block'
//         document.querySelector("#info2").style.display = 'none'
//         document.querySelector("#info3").style.display = 'none'
//     }
// }

// --------------
// Code 2 Teacher
/*
tab1 - botao
info1 - caixa
*/

function hide_all() {
    // no querySelectorAll irá buscar todos'*' os elementos que comecem com a 'id' = 'info' [id*="info"]
    // a seguir no classList é adicionado um ao elemento uma classe do bootstrap que faz com que o elemento fique invisível
    document.querySelectorAll('[id*="info"]').forEach((el) => { el.classList.add("d-none") })
}

function show_tab(id) {
    document.querySelector("#info" + id).classList.remove("d-none")
}

document.querySelectorAll('[id*="tab"]').forEach((btn) => {
    btn.addEventListener('click', (btn) => {
        hide_all();
        show_tab(btn.target.id.substring(3));
    })
})

hide_all();
show_tab(1);