
function mostrar(){
document.getElementById("uno").style.display='block';

}

function ocultar(){
document.getElementById("uno").style.display='none';

}

function mosos(){

  var formulario =document.getElementById("uno");
  
  if (formulario.style.display =="none") {

  	mostrar();
  }
  else{
  	ocultar();
  }

}

function hacerclick(){
document.getElementById('boton').onclick=mosos

 }


window.onload=hacerclick