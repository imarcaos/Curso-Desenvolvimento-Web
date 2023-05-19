/* ----------------------------------------------------------------------------

Exercício: 019
Enunciado:
    Está declarado um array de frutos.
    Ao inserir uma palavra no input text e clicando em pesquisar, o sistema deverá
    indicar se a palavra existe ou não no array e indicar o resultado SIM ou NAO no
    elemento com o id = "resultado"

    NOTA: Não podes usar um ciclo neste exercício.
---------------------------------------------------------------------------- */
let frutos = ['laranja', 'maçã', 'pêra', 'morango', 'ananás', 'limão', 'banana'];

/*
Date: 2023-05-19
*/

//----
// info: input #text_palavra , button .btn, div text #resultado

// parcial work
// document.querySelector('.btn').addEventListener('click', () => {
//     let input = document.querySelector('#text_palavra');

//     if (input.value !== '') {
//         let p = document.createElement('p');
//         if (frutos.find(e => e == input.value)) {
//             //console.log('true');
//             p.textContent = "SIM";
//         } else {
//             p.textContent = "NÃO";
//         }
//         document.querySelector('#resultado').appendChild(p);
//         input.value = '';
//         input.focus();
//     }

// })


// Teacher's code
document.querySelector('.btn').addEventListener('click', () => {
    document.querySelector('#resultado').textContent = frutos.includes(document.querySelector("#text_palavra").value) ? 'SIM' : 'NAO'
})