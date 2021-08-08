var guardarll=[""];
var hh=["hola","Piernas2","reloj"];
var dor="descanso";
 

 
var tt =[""];
 var yyy;
 var tttt=document.getElementById('mio');
  var guardarl=[""];
  guardarl=["https://png.pngtree.com/element_our/sm/20180608/sm_5b1b0f996db86.jpg",
"https://img.freepik.com/vector-gratis/fondo-poligonal-transparente-colorido-abstracto_1055-5149.jpg?size=338&ext=jpg",
"https://png.pngtree.com/png-clipart/20200628/ourmid/pngtree-creative-vector-sale-e-commerce-promotion-label-png-image_2265275.jpg",
"https://img.freepik.com/vector-gratis/vector-onda-azul-transparente_1055-7084.jpg?size=338&ext=jpg"
];
  
const cargarSonido = function (fuente) {
   const sonido = document.createElement("audio");
   sonido.src = fuente;
   sonido.setAttribute("preload", "auto");
   sonido.setAttribute("controls", "none");
   sonido.style.display = "none"; // <-- oculto
   document.body.appendChild(sonido);
   return sonido;
};

const sonidoo = cargarSonido("../vista/css/sonido/preparacion.mp3"); 
const sonidoo2 = cargarSonido("../vista/css/sonido/actividad.mp3"); 
const sonidoo3 = cargarSonido("../vista/css/sonido/descanso.mp3"); 

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

var inpausa=false;
     var stop=false;

     function wait(ms) {
      return new Promise((resolve) => setTimeout(resolve, ms));
    }
    
    function mostrartime(sumtiempo) {
      minutos = parseInt(sumtiempo / 60, 0);
      console.log(minutos);
      document.getElementById("sumtime").innerHTML =
        minutos + ":" + (sumtiempo % 60);
    }

     comenzar = async () => {
    //aqui igualas a los valores de la interfaz con getelementbyid().value
    var spreparacion =document.getElementById('tPreparacion').value;
    var sactividad = document.getElementById('tActividad').value;
    var sdescanso = document.getElementById('tDescanso').value;
    var Numseries = document.getElementById('numSeries').value;
    var rondas =document.getElementById('numRondas').value;
  var ssddd= document.getElementById('Verondas').value;
  var sumtiempo =
  (parseInt(sactividad) + parseInt(sdescanso) + parseInt(spreparacion)) *
  Numseries *
  rondas;
console.log("time " + sumtiempo);
mostrartime(sumtiempo);
    //modifica los for que quieras como cuenta regresiva

    for (let ronda = rondas; ronda > 0; ronda--) {
        //junto a cada console.log metes la llamada a getelementbyid().innerhtml=ronda o lo que corresponda respectivamente
        console.log('ronda' + ronda);
        document.getElementById('Verondas').innerHTML=ronda;
        //document.getElementById('lnronda').innerHTML = ronda;
              
        for (let serie = Numseries; serie >0 ; serie--) {
          console.log('series ' + serie);
          document.getElementById('Verserie').innerHTML=serie;

          document.getElementById('countdown').innerHTML=serie;

          document.getElementById('preparacion').innerHTML = 'preparacion';
                sonidoo.play();
        for (let preparacion = spreparacion; preparacion >0 ; preparacion--) {
         console.log('preparacion ' + preparacion + ' segundo')      
         document.getElementById('estado12').innerHTML = 'Preparate para el siguiente ejercicio';
         document.getElementById('poll').innerHTML= "<img src='"+"../vista/css/img/"+tt[serie]+".jpg"+"'>";
           document.getElementById('countdown').innerHTML=preparacion;
           
           while(inpausa){
            await wait (2000);
          }

          if(stop){
             document.getElementById('countdown').innerHTML = '';
             document.getElementById('preparacion').innerHTML = '';
             document.getElementById('Verserie').innerHTML='';
             document.getElementById('Verondas').innerHTML='';
             document.getElementById('sumtime').innerHTML='';
             return ;
          }
            await wait(1000);
            sumtiempo-=1;
            mostrartime(sumtiempo);

        }

               document.getElementById('preparacion').innerHTML = 'actividad';
               sonidoo2.play();
            for (let actividad = sactividad; actividad >0 ; actividad--) {
              console.log('actividad ' + actividad + ' segundo');
                
                document.getElementById('estado12').innerHTML = 'actividad';
                document.getElementById('poll').innerHTML= "<img src='"+"../vista/css/img/"+tt[serie]+".jpg"+"'>";
                 
                    document.getElementById('countdown').innerHTML=actividad;

                    while(inpausa){
                     await wait (2000);
                   }

                   if(stop){
                      document.getElementById('countdown').innerHTML = '';
                 
                      document.getElementById('Verserie').innerHTML='';
                      document.getElementById('Verondas').innerHTML='';
                      document.getElementById('sumtime').innerHTML='';
                      return ;
                   }
                await wait(1000);
                sumtiempo-=1;
                mostrartime(sumtiempo);
            }
              document.getElementById('preparacion').innerHTML = 'descanso';
              sonidoo3.play();
            for (let descanso = sdescanso; descanso >0; descanso--) {
                console.log('descanso ' + descanso + ' segundo');              
                document.getElementById('estado12').innerHTML = 'Descanso';              
                document.getElementById('poll').innerHTML= "<img src='"+"../vista/css/img/"+dor+".jpg"+"'>";
               document.getElementById('countdown').innerHTML=descanso;
               while(inpausa){
                  await wait (2000);
                }

                if(stop){
                    document.getElementById('countdown').innerHTML = '';
                    document.getElementById('descanso').innerHTML = '';
                    document.getElementById('Verserie').innerHTML='';
                    document.getElementById('Verondas').innerHTML='';
                    document.getElementById('sumtime').innerHTML='';
                   return ;
                }
                await wait(1000);
                sumtiempo-=1;
                mostrartime(sumtiempo);
            }
        }
    }
    detener();

}

//comenzar();
function pause() { 
   inpausa=!inpausa;
 }
 
 function detener(){
    stop=true;
 }

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
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Agregar ejercicio");      
   $("#modalCRUD").modal("show"); 


});





$("btnGuardar").submit(function(e){
   e.preventDefault();    
   dato = $.trim($("#dato").val());
   dato2 = $.trim($("#dato2").val());
   dato3 = $.trim($("#dato3").val());    
   dato4 = $.trim($("#dato4").val());    
   dato5 = $.trim($("#dato5").val());    
   dato6 = $.trim($("#dato6").val());    
   dato7 = $.trim($("#dato7").val());    
   dato8 = $.trim($("#dato8").val());    
   dato9 = $.trim($("#dato9").val());    
   dato10 = $.trim($("#dato10").val());    
   $.ajax({
       url: "../controlador/accion/act_guardarjercicio.php",
       type: "POST",
       dataType: "json",
       data: {dato:dato, dato2:dato2, dato3:dato3, dato4:dato4, dato5:dato5,dato6:dato6,dato7:dato7,dato8:dato8,dato9:dato9,dato10:dato10 },
       success: function(data){  
           console.log(data);
           dato = data[0].dato;            
           dato2 = data[0].dato2;
           dato3 = data[0].dato3;
           dato4 = data[0].dato4;
           dato5 = data[0].dato5;  
           dato6= data[0].dato6;  
           dato7 = data[0].dato7;  
           dato8 = data[0].dato8;  
           dato9 = data[0].dato9;  
           dato10 = data[0].dato10;  
        
          
       }        
   });
   $("#modalCRUD").modal("hide");    
   
}); 

function localsto(){
	 
	var usuario1="hola"; 
   var juj=   document.getElementById("nombre").value;  
       
	var guardars=document.getElementById("dato");
   var guardars2=document.getElementById("dato2");
   var guardars3=document.getElementById("dato3");
   var guardars4=document.getElementById("dato4");
   var guardars5=document.getElementById("dato5");
   var guardars6=document.getElementById("dato6");
   var guardars7=document.getElementById("dato7");
   var guardars8=document.getElementById("dato8");
   var guardars9=document.getElementById("dato9");
   var guardars10=document.getElementById("dato10");
   var selected2 = guardars2.options[guardars2.selectedIndex].text;
   var selected= guardars.options[guardars.selectedIndex].text;
   var selected3= guardars3.options[guardars3.selectedIndex].text;
   var selected4= guardars4.options[guardars4.selectedIndex].text;
   var selected5= guardars5.options[guardars5.selectedIndex].text;
   var selected6= guardars6.options[guardars6.selectedIndex].text;
   var selected7= guardars7.options[guardars7.selectedIndex].text;
   var selected8= guardars8.options[guardars8.selectedIndex].text;
   var selected9= guardars9.options[guardars9.selectedIndex].text;
   var selected10= guardars10.options[guardars10.selectedIndex].text;
	tt.push(selected,selected2,selected3,selected4,selected5,selected6,selected7,selected8,selected9,selected10);
   
   alert("ejercicios elegidos ya puedes salir");
 
 guardarll.unshift(tt);

localStorage.setItem(juj,guardarll);

}