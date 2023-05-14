/* ----------------------------------------------------------------------------

Exercício: 016
Enunciado:
    Ao clicar em "Adicionar", se o input tiver texto, adicionar o mesmo num
    parágrafo por baixo do botão.
    Não importa a ordem das palavras e frases.
    Quando clicar em "Limpar", todas as palavras e frases devem desaparecer
    e o input deve ficar limpo e receber o focus.

    NOTA: O HTML não pode ser alterado.
---------------------------------------------------------------------------- */
/*
Date: 2023-05-14
*/

//----
// info: input #text_post , root button .mt-3 .text-center (Limpar e Adicionar), div text #posts

let input = document.querySelector('#text_post');

// adicionar
document.querySelector('.mt-3.text-center').lastElementChild.addEventListener('click', () => {
    // console.log('Botão Adicionar')
    if (input.value !== '') {
        let p = document.createElement('p');
        p.textContent = input.value;
        document.querySelector("#posts").appendChild(p);
        input.value = '';
        input.focus();
    }
})

// limpar
document.querySelector('.mt-3.text-center').firstElementChild.addEventListener('click', () => {
    // console.log('Botão Limpar')
    document.querySelector("#posts").innerHTML = null;
    input.value = '';
    input.focus();
})