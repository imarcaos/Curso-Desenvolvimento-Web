/* ----------------------------------------------------------------------------

Exercício: 010
Enunciado:
    Existem 4 áreas a cinza.
    Ao clicar numa das áreas a área clicada deve ficar com fundo
    amarelo e as restantes a vermelho.
---------------------------------------------------------------------------- */


/*
Date: 2023-05-05
*/

//----
// My Code
// info: box1~box5

// document.querySelectorAll('[id*="box"]').forEach((bx) => {
//     bx.addEventListener('click', (bx) => {

//         let box_id = bx.target.id.substring(3)
//         // console.log(box_id)

//         sameColor(box_id)
//         document.querySelector("#box" + box_id).style.backgroundColor = "yellow"
//     })
// })

// function sameColor(id) {
//     for (i = 1; i <= 4; i++) {
//         document.querySelector("#box" + i).style.backgroundColor = "red"
//     }
// }


//----
// Teacher's code

const boxes = document.querySelectorAll('[id*="box"]');
boxes.forEach((box) => {
    box.addEventListener('click', (box) => {
        // todas a vermelho
        all_red();
        // colocar a amarelo a atual
        box.target.style.backgroundColor = "yellow"
    })
})

function all_red() {
    boxes.forEach(box => {
        box.style.backgroundColor = "red";
    })
}