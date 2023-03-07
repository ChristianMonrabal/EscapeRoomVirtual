// Desplegable Pista

function toggleMenu() {
    var menu = document.getElementById("menu");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

  function toggleUpdate() {
    var upgrade = document.getElementById("upgrade");
    if (upgrade.style.display === "none") {
      upgrade.style.display = "block";
    } else {
      upgrade.style.display = "none";
    }
  }

  function togglePista() {
    var pista = document.getElementById("pista");
    if (pista.style.display === "block") {
      pista.style.display = "none";
    } else {
      pista.style.display = "block";
    }
  }
  
  function togglePantalla() {
    var pantalla = document.getElementById("pantalla");
    if (pantalla.style.display === "block") {
      pantalla.style.display = "none";
    } else {
      pantalla.style.display = "block";
    }
  }

  function toggleScan() {
    var clamav = document.getElementById("clamav");
    if (clamav.style.display === "block") {
      clamav.style.display = "none";
    } else {
      clamav.style.display = "block";
    }
  }
 
  function  toggleDesconect() {
    var desc = document.getElementById("desc");
    if (desc.style.display === "block") {
      desc.style.display = "none";
    } else {
      desc.style.display = "block";
    }
  }

// Contador

let minutos = 10;
let segundos = 0;
cargarSegundo();

function cargarSegundo(){
  let txtSegundos;

  if(segundos < 0){
    segundos = 59;
  }

  if(segundos <0){
    txtSegundos = '0${segundos}';
  }else {
    txtSegundos = segundos;
  }
  document.getElementById('segundos').innerHTML = txtSegundos;
  segundos --;

  cargarMinutos(segundos);
}

function cargarMinutos(segundos){
  let txtMinutos;

  if(segundos == -1 && minutos !==0){
    setTimeout(()=> {
      minutos = 0 ;
    },500)
  }else if (segundos == -1 && minutos !==0){
    setTimeout(()=> {
      minutos = 59;
    },500)
  }

  if(minutos < 10){
    txtMinutos = '0${minutos}';
  }else {
    txtMinutos = minutos;
  }
  document.getElementById('minutos').innetHTML = txtMinutos;
}

setInterval(cargarSegundo, 1000)

