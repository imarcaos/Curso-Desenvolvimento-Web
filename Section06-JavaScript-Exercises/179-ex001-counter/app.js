/* ----------------------------------------------------------------------------

Exercício: 001
Enunciado: CONTADOR
    
    A partir do HTML existente, apresentar um valor inicial igual a 0 e definir
    funcionalidades nos botões de decremento e incremento. Ao clicar em cada
    um dos botões, o utilizador irá aumentar ou diminuir o valor em uma unidade.

---------------------------------------------------------------------------- */

let valor = 0;
let view_valor = document.querySelector('#valor')

// document.querySelector('#btn_decremento').addEventListener('click', () => {
//     view_valor.textContent = --valor
// })

// document.querySelector('#btn_incremento').addEventListener('click', () => {
//     view_valor.textContent = ++valor
// })


document.querySelectorAll("button").forEach((button) => {
    button.addEventListener('click', (event) => {
        let id = event.target.id
        //console.log(id)

        if (id === 'btn_decremento') {
            view_valor.textContent = --valor;
        } else if (id === 'btn_incremento') {
            view_valor.textContent = ++valor;
        }
    })
})