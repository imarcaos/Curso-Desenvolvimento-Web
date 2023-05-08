/* ----------------------------------------------------------------------------

Exercício: 011
Enunciado:
    A grelha inicial contém dezasseis imgs sem souce.
    Quando clicamos numa das imgs, vamos apresentar o símbolo X (imagem)
    No clique seguinte, que só pode acontecer numa img que não tenha símbolo,
    vamos apresentar o símbolo 'O'.
---------------------------------------------------------------------------- */

/*
Date: 2023-05-08
*/

//----
// My Code  (preciso melhorar, pois ele permite clicar novamente nos blocos)
// info: img1~box16

// const images = document.querySelectorAll('[id*="img"]')
// let count = 0

// images.forEach((img) => {
//     img.addEventListener('click', (img) => {
//         let img_id = img.target.id.substring(3)
//         // console.log(img_id)
//         odd_even(img_id)
//     })
// })

// function odd_even(id) {
//     console.log(count)
//     if (count % 2 == 0) {
//         document.querySelector("#img" + id).style.backgroundImage = "url('x.png')"
//     } else {
//         document.querySelector("#img" + id).style.backgroundImage = "url('o.png')"
//     }
//     count++
// }

//----
// Teacher's Code

let filled_imgs = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
let symbol = "x";
document.querySelectorAll('[id*="img"]').forEach(img => {
    img.addEventListener('click', img => {
        let index = img.target.id.substring(3);
        place_symbol(index);
    })
})

function place_symbol(index) {

    // verifica se a imagem já foi anteriomente preenchida
    if (filled_imgs[index - 1] != 0) return;

    document.querySelector("#img" + index).setAttribute('src', './' + symbol + '.png');
    filled_imgs[index - 1] = 1;
    if (symbol == 'x') {
        symbol = 'o';
    } else {
        symbol = 'x';
    }
}