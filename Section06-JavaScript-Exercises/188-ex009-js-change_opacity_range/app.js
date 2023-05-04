/* ----------------------------------------------------------------------------

Exercício: 009
Enunciado:
    Exercício simples: O texto é branco e o elemento range vai servir para
    alterar a transparência do texto. Do valor mais opaco à esquerda, até
    à transparência total à direita.

    NOTA: Deves definir os valores do range.
---------------------------------------------------------------------------- */

/*
Date: 2023-05-04
*/

// My Code

// range (0-100), h3 (text to change)

let range = document.querySelector('#range')
range.setAttribute('min', 0)
range.setAttribute('max', 100)
range.value = 0
range.addEventListener('input', (e) => {
    console.log(e.target.value / 100)
    document.querySelector("h3").style.opacity = 1 - (e.target.value / 100)
})