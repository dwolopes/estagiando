function addZero(i) {
   if (i < 10) {
       i = "0" + i;
   }
   return i;
}

function myFunction() {
    var d = new Date();
    var x = document.getElementById("demo");
    var h = addZero(d.getHours());
    var m = addZero(d.getMinutes());
    var s = addZero(d.getSeconds());
    x.innerHTML = h + ":" + m + ":" + s;
}

window.onload = setInterval(horario, 1000);

function horario() {
  var relogio = document.querySelector("#relogio");
  var d = new Date();
  var seg = addZero(d.getSeconds());
  var min = addZero(d.getMinutes());
  var hr = addZero(d.getHours());
  var dia = addZero(d.getDate());
  var mes = d.getMonth();
  var meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
  var diaSem = d.getDay();
  var diasSemana = ["Domingo","Segunda-Feira","Terça-Feira","Quarta-Feira","Quinta-Feira","Sexta-Feira","Sábado"];

  if(min <= 9 ){

    relogio.innerHTML = diasSemana[diaSem] + ", " + dia + " de " + meses[mes] + ", " + hr + ":" + "0" + min + ":" + seg;

  }

  if(min <= 9 && seg <= 9){

    relogio.innerHTML = diasSemana[diaSem] + ", " + dia + " de " + meses[mes] + ", " + hr + ":" + "0" + min + ":" + "0" + seg;

  }

  if(seg <= 9){

    relogio.innerHTML = diasSemana[diaSem] + ", " + dia + " de " + meses[mes] + ", " + hr + ":" + min + ":" + "0" + seg;

  }

  relogio.innerHTML = diasSemana[diaSem] + ", " + dia + " de " + meses[mes] + ", " + hr + ":" + min + ":" + seg;
}