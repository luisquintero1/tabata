

   addEventListener('load',inicio,false);

   function inicio()
   {
   
     document.getElementById('tPreparacion').addEventListener('change',cambioTemperatura,false);
     document.getElementById('tActividad').addEventListener('change',cambioTemperatura,false);
     document.getElementById('tDescanso').addEventListener('change',cambioTemperatura,false);
     document.getElementById('numSeries').addEventListener('change',cambioTemperatura,false);
     document.getElementById('numRondas').addEventListener('change',cambioTemperatura,false);
   
   }
 
   function cambioTemperatura()
   {    
     
     document.getElementById('vale').innerHTML=document.getElementById('tPreparacion').value;
     document.getElementById('vale2').innerHTML=document.getElementById('tActividad').value;
     document.getElementById('vale3').innerHTML=document.getElementById('tDescanso').value;
     document.getElementById('vale4').innerHTML=document.getElementById('numSeries').value;
     document.getElementById('vale5').innerHTML=document.getElementById('numRondas').value;
 
   }
   window.onload = () => {
    h = 0;
    m = 0;
    s = 0;
    mls = 0;
    timeStarted = 0;
    time = document.getElementById("time");
    btnStart = document.getElementById("btn-start");
    btnStop = document.getElementById("btn-stop");
    btnReset = document.getElementById("btn-reset");
    btnStart.addEventListener("click", start);
    btnStop.addEventListener("click", stop);
    btnReset.addEventListener("click", reset);
 };
 
 function write() {
    let ht, mt, st, mlst;
    mls++;
 
    if (mls > 99) {
       s++;
       mls = 0;
    }
    if (s > 59) {
       m++;
       s = 0;
    }
    if (m > 59) {
       h++;
       m = 0;
    }
    if (h > 24) h = 0;
 
    mlst = ('0' + mls).slice(-2);
    st = ('0' + s).slice(-2);
    mt = ('0' + m).slice(-2);
    ht = ('0' + h).slice(-2);
 
    time.innerHTML = `${ht}:${mt}:${st}.${mlst}`;
 }
 
 function start() {
   
    write();
    timeStarted = setInterval(write, 10);
    btnStart.removeEventListener("click", start);
 }
 
 function stop() {
   clearInterval(timeStarted);
   btnStart.addEventListener("click", start);
}
 
 function reset() {
    clearInterval(timeStarted);
    time.innerHTML = "00:00:00.00"
    h = 0;
    m = 0;
    s = 0;
    mls = 0;
    btnStart.addEventListener("click", start);
 }
// Definir la variable en el segundo que debe empezar
var segundoInicio = 11;

var act="actividad";
var des="descanso";
var aInicio = 7;
var dInicio = 8;
var ssegundoInicio = 3;
var regundoInicio = 3;
var lol="lololo";



function actualizar() {

   

document.getElementById('preparacion').innerHTML = act;
document.getElementById('countdown').innerHTML = segundoInicio;


if (segundoInicio == 0) {
     document.getElementById('preparacion').innerHTML = act;
     document.getElementById('countdown').innerHTML = aInicio;
   if(aInicio ==0){
document.getElementById('preparacion').innerHTML = des;
     document.getElementById('countdown').innerHTML = dInicio;
     if(dInicio ==0){


     }else{
        dInicio -=1;
        setTimeout(actualizar, 1E3); 
     }

}else{
aInicio -=1;
    setTimeout(actualizar, 1E3);

}
} else {
    segundoInicio-=1;
    setTimeout(actualizar, 1E3);
}
    




}


 actualizar();
 
 