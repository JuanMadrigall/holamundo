
 


  function showPlan(plan) 
  {
    document.querySelector("#plan-basico").style.display = "none"; 
    document.querySelector("#plan-premium").style.display = "none";
    if(plan === "basico") 
    {
      document.querySelector("#plan-basico").style.display = "block";
    } 
    else if(plan === "premium") 
    {
      document.querySelector("#plan-premium").style.display = "block";
    }
  }
if($ejecuta) 
{
         echo 
         alert.document('Usuario registrado exitosamente!');
       
  
  }
  var lienzo = document.getElementById("lineal");
var papel = lienzo.getContext("2d");


var lineal = papel.createRadialGradient(35, 400, 30, 30, 400, 490);
lineal.addColorStop(0.1, "#b9e0ff");
lineal.addColorStop(0.9, "#2684e7");

papel.fillStyle = lineal;
papel.fillRect(0, 0, 400, 550);
papel.font = "45px Arial";
papel.fillStyle = "blue";
papel.fillText("Hola, mundo!",70, 320);
var lienzo1 = document.getElementById("circular");
var papel1 = lienzo1.getContext("2d");
var cir1 = new Image();
cir1.src = "harry potter.jpg";
cir1.addEventListener("load", dibujar1);
function dibujar1() {
  papel1.drawImage(cir1, 100, 100);

}

var circular = papel1.createRadialGradient(35, 400, 30, 30, 400, 490);
circular.addColorStop(0.1, "#ffffff");
circular.addColorStop(0.8, "#b4b6b9");

papel1.fillStyle = circular;
papel1.fillRect(0, 0, 400, 550);

var lienzo2 = document.getElementById("circular1");
var papel2 = lienzo2.getContext("2d");
var cir2 = new Image();
cir2.src = "oso.gif";
cir2.addEventListener("load", dibujar2);
function dibujar2() {
  papel2.drawImage(cir2, 100, 100);
}

var circular1 = papel2.createRadialGradient(35, 400, 30, 30, 400, 490);
circular1.addColorStop(0.1, "#efd52e");
circular1.addColorStop(0.9, "#D4AF37");

papel2.fillStyle = circular1;
papel2.fillRect(0, 0, 400, 550);

var lienzo3 = document.getElementById("lineal1");
var papel3 = lienzo3.getContext("2d");
var cir3 = new Image();
cir3.src = "inteliente.gif";
cir3.addEventListener("load", dibujar3);
function dibujar3() {
  papel3.drawImage(cir3, 10, 10);
}