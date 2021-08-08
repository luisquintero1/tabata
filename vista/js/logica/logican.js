
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
var segundoInicio =document.getElementById('tPreparacion').value;
var pree="preparacion";
var act="actividad";
var des="descanso";
var serie="series";
var ronda="rondas";
var aInicio = document.getElementById('tActividad').value;
var dInicio = document.getElementById('tDescanso').value;
var ssegundoInicio = 3;
var regundoInicio = 3;
var segundosP=document.getElementById('tPreparacion').value;
var segundosA=document.getElementById('tActividad').value;
var segundosD=document.getElementById('tDescanso').value;
var Numseries=document.getElementById('numSeries').value;
var Rondas=document.getElementById('numRondas').value;

async function descanso(){
   if(segundosD>0){
   document.getElementById('countdown').innerHTML = segundosD;
   segundosD-=1 ;
   return new Promise(resolve=>setTimeout(descanso, 1E3));
   }
   /*if(segundosD<0){
      actividad();
   }
   Numseries=document.getElementById('numSeries').value;
   document.getElementById('preparacion').innerHTML = 'series';
   await  series();*/
   }


async function actividad(){
   if(segundosA>0){
   document.getElementById('countdown').innerHTML = segundosA;
   segundosA-=1 ;
   return new Promise(resolve=>setTimeout(actividad, 1E3));
   }
   segundosD=document.getElementById('tDescanso').value;
   document.getElementById('preparacion').innerHTML = 'descanso';
   await descanso();
}
  

/*async function series(){
       
      for(var i=0;i<Numseries;i++){
        
         
   document.getElementById('countdown').innerHTML = Numseries;
     Numseries -=1 ;
     return new Promise(resolve=>setTimeout(series, 1E3));
     
       if(segundosA>0){
   document.getElementById('countdown').innerHTML = segundosA;
   segundosA-=1 ;
   return new Promise(resolve=>setTimeout(actividad, 1E3));
   }
     } 
}*/


async function preparacion(){
   if(segundosP>0){
   document.getElementById('countdown').innerHTML = segundosP;
   segundosP-=1 ;
   return await new Promise(resolve=> setTimeout(preparacion, 1E3));
   
   }
   segundosA=document.getElementById('tActividad').value;
   document.getElementById('preparacion').innerHTML = 'actividad';
   return await actividad();

   /*Numseries=document.getElementById('numSeries').value;
   document.getElementById('preparacion').innerHTML = 'series';
   await series();*/
}



/*async function comenzar(){
   for(var i=1;i<=Numseries;i++){
    segundosP=document.getElementById('tPreparacion').value;
    segundosA=document.getElementById('tActividad').value;
    segundosD=document.getElementById('tDescanso').value;
    Numseries=document.getElementById('numSeries').value;
   document.getElementById('preparacion').innerHTML = "series";
   segundosP=document.getElementById('tPreparacion').value;
      document.getElementById('countdown').innerHTML = i;

   document.getElementById('preparacion').innerHTML = 'preparacion';

   await preparacion();
   }
}*/

//funcion para esperar n milisiegundos
/*function wait(ms) {
    var d = new Date();
    var d2 = null;
    do {
        d2 = new Date();
    }
    while (d2 - d < ms);
}*/

    function wait(ms) { return new Promise(resolve => setTimeout(resolve, ms)); }

     comenzar = async () => {
    //aqui igualas a los valores de la interfaz con getelementbyid().value
    var spreparacion =document.getElementById('tPreparacion').value;
    var sactividad = document.getElementById('tActividad').value;
    var sdescanso = document.getElementById('tDescanso').value;
    var Numseries = document.getElementById('numSeries').value;
    var rondas =document.getElementById('numRondas').value;
  var ssddd= document.getElementById('Verondas').value;

    //modifica los for que quieras como cuenta regresiva
    for (let ronda = rondas; ronda > 0; ronda--) {
        //junto a cada console.log metes la llamada a getelementbyid().innerhtml=ronda o lo que corresponda respectivamente
        console.log('ronda' + ronda)
        document.getElementById('Verondas').innerHTML=ronda;
        //document.getElementById('lnronda').innerHTML = ronda;
        
       
      
       
        for (let serie = Numseries; serie >0 ; serie--) {

            console.log('series ' + serie);
            document.getElementById('Verserie').innerHTML=serie;

                document.getElementById('countdown').innerHTML=serie;

                document.getElementById('preparacion').innerHTML = 'preparacion';
        for (let preparacion = spreparacion; preparacion >0 ; preparacion--) {
         console.log('preparacion ' + preparacion + ' segundo')
           document.getElementById('countdown').innerHTML=preparacion;
            await wait(1000);

        }



               document.getElementById('preparacion').innerHTML = 'actividad';
            for (let actividad = sactividad; actividad >0 ; actividad--) {

                console.log('actividad ' + actividad + ' segundo');
                    document.getElementById('countdown').innerHTML=actividad;
                await wait(1000);
            }
              document.getElementById('preparacion').innerHTML = 'descanso';
            for (let descanso = sdescanso; descanso >0; descanso--) {

                console.log('descanso ' + descanso + ' segundo');
               document.getElementById('countdown').innerHTML=descanso;
                await wait(1000);

            }
        }
    }


}

//comenzar();


function actualizar() {
   document.getElementById('preparacion').innerHTML = pree;
   document.getElementById('countdown').innerHTML = segundoInicio;


   if (segundoInicio == 0) {
    document.getElementById('preparacion').innerHTML = act;
    document.getElementById('countdown').innerHTML = aInicio;
    if(aInicio ==0){
      document.getElementById('preparacion').innerHTML = des;
      document.getElementById('countdown').innerHTML = dInicio;
      if(dInicio ==0){
       document.getElementById('preparacion').innerHTML = serie;
       document.getElementById('countdown').innerHTML = Numseries;
       if(Numseries ==0){

       }else{
        Numseries -=1;
        setTimeout(actualizar, 1E3); 
     }
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


 //actualizar();
 
 $("#btnNuevo").click(function(){

   $("#modalCRUD").modal("show"); 


});