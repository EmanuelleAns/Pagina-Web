function mostraralerta2(){
alert('PRUEBAAA 2.0');
}


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



function mostrarEL(){
document.getElementById("EliRe").style.display='block';

}

function ocultarEL(){
document.getElementById("EliRe").style.display='none';

}

function mosEL(){

  var eliminarR =document.getElementById("EliRe");
  
  if (eliminarR.style.display =="none") {

  	mostrarEL();
  }
  else{
  	ocultarEL();
  }

}

function mostrarED(){
document.getElementById("ediR").style.display='block';

}

function ocultarED(){
document.getElementById("ediR").style.display='none';

}

function EditarR(){

  var eliminarR =document.getElementById("ediR");
  
  if (eliminarR.style.display =="none") {

    mostrarED();
  }
  else{
    ocultarED();
  }

}







function hacerclick(){
document.getElementById('Ed').onclick=mosos
document.getElementById('ER').onclick=mosEL
document.getElementById('Edit').onclick=EditarR


 }


window.onload=hacerclick