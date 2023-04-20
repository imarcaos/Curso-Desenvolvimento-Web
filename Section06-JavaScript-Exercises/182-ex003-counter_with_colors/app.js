/* ----------------------------------------------------------------------------

Exercício: 003
Enunciado: CONTADOR COM CORES PARA NEGATIVOS, ZERO E POSITIVOS
    
    A partir do HTML existente, apresentar um valor inicial igual a 0 e definir
    funcionalidades nos botões de decremento e incremento.
    No caso do valor ser zero o texto deve ser branco.
    No caso do valor ser negativo o texto deve ser vermelho puro.
    No caso do valor ser positivo o texto deve ser verde puro.

---------------------------------------------------------------------------- */

let valor = 0
let view_valor = document.querySelector('#valor')

// code 1
// if (valor == 0) view_valor.style.color = "white"

// document.querySelector('#btn_decremento').addEventListener('click', () => {
//     view_valor.textContent = --valor
//     if (valor == 0) view_valor.style.color = "white"
//     else if (valor < 0) view_valor.style.color = "red"
// })

// document.querySelector('#btn_incremento').addEventListener('click', () => {
//     view_valor.textContent = ++valor
//     if (valor == 0) view_valor.style.color = "white"
//     else if (valor > 0) view_valor.style.color = "green"
// })

// code 2
document.querySelector('#btn_decremento').addEventListener('click', () => {
    --valor
    set_valor()
})

document.querySelector('#btn_incremento').addEventListener('click', () => {
    ++valor
    set_valor()
})

function set_valor() {
    view_valor.textContent = valor
    // if (valor == 0) view_valor.style.color = "white"
    // else if (valor < 0) view_valor.style.color = "red"
    // else view_valor.style.color = "green"

    let color = valor == 0 ? 'white' : valor < 0 ? 'red' : 'green'
    view_valor.style.color = color
}