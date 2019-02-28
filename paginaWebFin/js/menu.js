// Menu Desplegable

var btnMenu = document.getElementById('btn-menu');//Definir variables guardando contenido con id

var nav = document.getElementById('nav');//Definir variables guardando contenido con id

btnMenu.addEventListener('click',function(){//Creamos evento,función 
   nav.classList.toggle('muestrate');//mostramos nav
})

