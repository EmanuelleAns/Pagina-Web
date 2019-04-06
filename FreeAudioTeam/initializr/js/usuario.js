
function mostrar(){
document.getElementById("For").style.display='block';

}

function ocultar(){
document.getElementById("For").style.display='none';

}

function mosos(){

  var formulario =document.getElementById("For");
  
  if (formulario.style.display =="none") {

  	mostrar();
  }
  else{
  	ocultar();
  }

}

function hacerclick(){
document.getElementById('Ed').onclick=mosos
document.getElementById('ER').onclick=mosEL
document.getElementById('Edit').onclick=EditarR


 }


window.onload=hacerclick