// este código vai ser executado antes dos elementos do body existire,
// teste 1
// document.querySelector("button").addEventListener('click', () => {
//     document.querySelector('h1').innerText = "Texto do título alterado"
// })

// teste 2
//Verificar o estado atual do carregamento da página
//console.log(document.readyState)

//teste 3
//Podemos ver com o seguinte código o carregamento da página (interactive e complete).
// - interactive - será mais útil quando precisamos de um carregamento rápido, de botões, forms, etc.
// - complete - será útil quando necessitamos de carregar nossas imagens, vídeos ou outros documentos interativos.
// document.addEventListener('readystatechange', (event) => {
//     console.log(event.target.readyState)
// })

// teste 4
// Neste caso só executo o código quando minha página estiver completa
// document.addEventListener('readystatechange', (event) => {
//     if (event.target.readyState === 'complete') {
//         document.querySelector("button").addEventListener('click', () => {
//             document.querySelector('h1').innerText = "Texto do título alterado"
//         })
//     }
// })

// teste 5
// O código a seguir funciona da mesma forma do anterior, nete caso será quando o conteúdo do DOM estiver carregado, parecido com o "interactive" do readystate .
document.addEventListener('DOMContentLoaded', () => {
    document.querySelector("button").addEventListener('click', () => {
        document.querySelector('h1').innerText = "Texto do título alterado"
    })
})