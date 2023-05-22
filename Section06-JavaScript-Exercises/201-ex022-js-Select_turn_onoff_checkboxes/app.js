/* ----------------------------------------------------------------------------

Exercício: 022
Enunciado:
    Está disponível um elemento select com 3 opções.
    Por baixo existem 4 checkboxes.
    Quando é selecionada a opção 3 no select, as checkboxes devem ficar ativas.
    Qualquer outra opção, devem desativar as checkboxes.
---------------------------------------------------------------------------- */
/*
Date: 2023-05-22
*/

//----
// info: Select: name="select_opcoes" or class="form-select" value = 3 , Check: id="check_1  ~ 4" or id="check_1 ~ 4"

checks_state('disabled')

document.querySelector('[name="select_opcoes"]').addEventListener('change', (e) => {
    if (e.target.value == 3) {
        checks_state('enable');
    } else {
        checks_state('disabled');
    }
})

function checks_state(state) {
    if (state == 'disabled') {
        document.querySelectorAll('[id*="check_"]').forEach(e => {
            e.setAttribute('disabled', true);
        })
    } else {
        document.querySelectorAll('[id*="check_"]').forEach(e => {
            e.removeAttribute('disabled');
        })
    }
}