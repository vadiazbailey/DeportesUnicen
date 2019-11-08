function validar() {
    let nombre, apellido, email, celular, disciplina, captcha;
    nombre =document.getElementById("nombre").value;
    apellido =document.getElementById("apellido").value;
    celular =document.getElementById("celular").value;
    email =document.getElementById("email").value;
    disciplina =document.getElementById("disciplina").value;
    captcha= document.getElementById("captcha").value;

    if(nombre==""){
      alert("Completar Nombre");
      return false;
    }
    else if(apellido==""){
      alert("Completar Apellido");
      return false;
    }
    else if(celular==""){
      alert("Completar Celular");
      return false;
    }
    else if(email==""){
      alert("Completar Email");
      return false;
    }
    else if(disciplina==""){
      alert("Completar Disciplina");
      return false;
    }
    else if (captcha != "5"){
      alert ("Valor de captcha incorrecto");
      return false;
    }
    else{
      alert("Gracias por completar el formulario");
      document.querySelector(".formulario").innerHTML = "Has sido registrado, en brevedad nos comunicaremos contigo... ¡¡¡VAMOS POR LA COPA!!!";
    }
}
/*function captcha(){
  let numero = new Array('0','1','2','3','4','5','6','7','8','9');
let i;
for (i=0;i<1;i++){
    let a = numero[Math.floor(Math.random() * numero.length)];
    let b = numero[Math.floor(Math.random() * numero.length)];
    //generar valores random del array
                 }
    let code = a + ' ' + b + ' ';
    document.getElementsByClassName("textoCaptcha").innerHTML = "Resultado de la suma"+ (a + b) ;
document.getElementById("captcha1").value = code;
}*/


