let form = document.querySelector('.form-register');
let progressOptions = document.querySelectorAll('.progressbar__option');
// Inputs del formulario que se van a validar
let nombreU = form.querySelector('#nombreU');
let ap = form.querySelector('#ap');
let am = form.querySelector('#am');
let depto = form.querySelector('#depto');
let puesto = form.querySelector('#puesto');
let departamento = form.querySelector('#departamento');
let tipo = form.querySelector('#tipo');
let marca = form.querySelector('#marca');
let modelo = form.querySelector('#modelo');
let nserie = form.querySelector('#nserie');


form.addEventListener('click', function(e) {
    let element = e.target;
    let isButtonNext = element.classList.contains('step__button--next');
    let isButtonBack = element.classList.contains('step__button--back');
    if (isButtonNext || isButtonBack) {
       let currentStep = document.getElementById('step-' + element.dataset.step);
        let jumpStep = document.getElementById('step-' + element.dataset.to_step);
        if (isButtonNext && !validate(element.dataset.step)) {
          // La validación falló, no avanzar al siguiente paso
          return;
      }



        currentStep.addEventListener('animationend', function callback() {
            currentStep.classList.remove('active');
            jumpStep.classList.add('active');
            if (isButtonNext) {
                currentStep.classList.add('to-left');
                progressOptions[element.dataset.to_step - 1].classList.add('active');
            } else {
                jumpStep.classList.remove('to-left');
                progressOptions[element.dataset.step - 1].classList.remove('active');
            }
            currentStep.removeEventListener('animationend', callback);
        });
        currentStep.classList.add('inactive');
        jumpStep.classList.remove('inactive');
    }
    
  
});

form.addEventListener('submit', function(e) {
  // Validar los datos antes de enviarlos
  // Pasar el último paso, en este ejemplo el último paso es el 3
  if (!validate(3)) {
      // Los datos son incorrectos por lo tanto no se deben de enviar
      e.preventDefault();
      return;
  }
  // Los datos se envian
});



function validate(currentStep) {
  // Validar que el correo no esté vacio
  if (nombreU.value === '') {
      alert('EL campo nombre es requerido');
      nombreU.focus();
      return false;
  }
  // Validar que la contraseña no esté vacia
  if (ap.value === '') {
      alert('El apellido paterno es requerido');
      ap.focus();
      return false;
  }
  // Validar que la contraseña tenga al menos 8 caracteres
  if (am.value === '') {
    alert('El apellido materno es requerido');
    am.focus();
    return false;
}
  // Validar que la contraseña coincida con la confirmación
  if (depto.value === '') {
    alert('El departamento es requerido');
    depto.focus();
    return false;
}


if (puesto.value === '') {
  alert('El puesto es requerido');
  puesto.focus();
  return false;
}

  // Validar campos del paso 2
  if (parseInt(currentStep) >= 2) {
      // Validar que el nombre no esté vacio
      if (departamento.value === '') {
          alert('El campo departamento es requerido');
          departamento.focus();
          return false;
      }
      // Validar que el apellido no esté vacio
      if (tipo.value === '') {
          alert('El tipo es requerido');
          tipo.focus();
          return false;
      }

      if (marca.value === '') {
        alert('El marca es requerido');
        marca.focus();
        return false;
    }

    if (modelo.value === '') {
      alert('El modelo es requerido');
      modelo.focus();
      return false;
  }
  if (nserie.value === '') {
    alert('El numero de serie es requerido');
    nserie.focus();
    return false;
}

  }
  // Validar los datos del paso 3 si es necesario
 
  return true;
}





/*
function isValidStep() {
  valor = document.getElementById("campo").value;
  valor1 = document.getElementById("ap").value;
  valor2 = document.getElementById("am").value;
  valor3 = document.getElementById("dep").value;
  valor4 = document.getElementById("pu").value;
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    return false;
  }
  /*if( valor1 == null || valor1.length == 0 || /^\s+$/.test(valor1) ) {
    return false;
  }

  if( valor2 == null || valor2.length == 0 || /^\s+$/.test(valor2) ) {
    return false;
  }

  if( valor3 == null || valor3.length == 0 || /^\s+$/.test(valor3) ) {
    return false;
  }

  if( valor4 == null || valor4.length == 0 || /^\s+$/.test(valor4) ) {
    return false;
  }*/





  var canvas2 = document.getElementById("Aval");
  var ctx2 = canvas2.getContext("2d");
  var cw2 = canvas2.width = 330,
    cx2 = cw2 / 2;
  var ch2 = canvas2.height = 300,
    cy2 = ch2 / 2;
    
  
  var dibujar2 = false;
  ctx2.lineJoin = "round";
  
  canvas2.addEventListener('mousedown', function(evt2) {
    dibujar2 = true;
    //ctx.clearRect(0, 0, cw, ch);
    ctx2.beginPath();
  
  }, false);
  
  canvas2.addEventListener('mouseup', function(evt2) {
    dibujar2 = false;
  
  }, false);
  
  canvas2.addEventListener("mouseout", function(evt2) {
    dibujar2 = false;
  }, false);
  
  canvas2.addEventListener("mousemove", function(evt2) {
    if (dibujar2) {
      var m2 = oMousePos(canvas2, evt2);
      ctx2.lineTo(m2.x, m2.y);
      ctx2.stroke();
    }
  }, false);
  
  
 



    var canvas = document.getElementById("Solicitante");
var ctx = canvas.getContext("2d");
var cw = canvas.width = 330,
  cx = cw / 2;
var ch = canvas.height = 300,
  cy = ch / 2;
  

var dibujar = false;
ctx.lineJoin = "round";

canvas.addEventListener('mousedown', function(evt) {
  dibujar = true;
  //ctx.clearRect(0, 0, cw, ch);
  ctx.beginPath();

}, false);

canvas.addEventListener('mouseup', function(evt) {
  dibujar = false;

}, false);

canvas.addEventListener("mouseout", function(evt) {
  dibujar = false;
}, false);

canvas.addEventListener("mousemove", function(evt) {
  if (dibujar) {
    var m = oMousePos(canvas, evt);
    ctx.lineTo(m.x, m.y);
    ctx.stroke();
  }
}, false);

function oMousePos(canvas, evt) {
  var ClientRect = canvas.getBoundingClientRect();
  return { //objeto
    x: Math.round(evt.clientX - ClientRect.left),
    y: Math.round(evt.clientY - ClientRect.top)
  }
}
 


function clearcanvas1()
{
    var canvas = document.getElementById('Solicitante'),
        ctx = canvas.getContext("2d");
    ctx.clearRect(0, 0, canvas.width, canvas.height);
}

function clearcanvas2()
{
    var canvas = document.getElementById('Aval'),
        ctx = canvas.getContext("2d");
    ctx.clearRect(0, 0, canvas.width, canvas.height);
}