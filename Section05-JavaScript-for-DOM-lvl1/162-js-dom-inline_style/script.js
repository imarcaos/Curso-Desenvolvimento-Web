// APLICAR ESTILOS INLINE COM JAVASCRIPT

let el = document.querySelector("h1")
el.style.color = "red"
el.style.backgroundColor = "yellow"

let elp = document.querySelector("p")
console.log(elp.style.color)

const estilos = window.getComputedStyle(elp)
console.log(estilos.getPropertyValue('color'))
console.log(estilos.getPropertyValue('font-size'))