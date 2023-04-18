// DESATIVAR A FUNÇÃO NATIVA DE UM LINK
document.querySelector('a').addEventListener('click', (e) => {
    console.log(e)
    e.preventDefault()
})

// DESATIVAR A SUBMISSÃO DO FORMULÁRIO
document.querySelector('input[type="submit"]').addEventListener('click', (event) => {
    // validação do formulário
    console.log(event)
    event.stopPropagation()
    event.preventDefault()
})

// CUIDADO COM A PROPAGAÇÃO!
document.querySelector('.caixa').addEventListener('click', () => {
    console.log('DIV')
})