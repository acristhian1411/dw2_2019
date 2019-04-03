// declaraciones
var env = document.getElementById("enviar");

var x = document.getElementById("pais");
//x.addEventListener("focus", myFocusFunction, true);
// eventos
x.addEventListener("blur", cargar_ciudad, true);
env.addEventListener("click", cargar_tabla, true);



// funciones
function cargar_ciudad() {
//  var x = document.getElementById("user-name").value;
//  var i = document.getElementById("texto_box");
//    i.innerHTML  = x;

var x = document.getElementById("pais").value;
 var y = document.getElementById("ciudad");
 var ciudad = [["Encarnacion",1], ["Pilar",1], ["Ca´acupe",1], ["Asuncion",1],
  ["Bs As",2], ["Cordoba", 2],["Posadas",2],
  ["Rio",3], ["bahia",3],["Sao paulo",3],
["Montevideo",4],["Durazno",4],["Canelones",4],
["Santa cruz",5],["La paz",5], ["Cochabamba",5]];
 var op;
 for (var i = 0; i < ciudad.length; i++) {
   if (ciudad[i][1] == x) {
     op = op + "<option value= "+ciudad[i][0]+" > "  +ciudad[i][0]+"</option> " ;
   } // if
 } // for
 y.innerHTML  = op;
}

function cargar_tabla() {
  var tab = document.getElementById("tabla");
//  var i = document.getElementById("texto_box");
//    i.innerHTML  = x;
var op;
var nom = document.getElementById("nombre").value;
var ape = document.getElementById("apellido").value;
var nac = document.getElementById("fecha").value;
var tel = document.getElementById("telefono").value;
var pais = document.getElementById("pais");
var text = pais.options[pais.selectedIndex].innerHTML;
var ciu = document.getElementById("ciudad").value;

op = tab.innerHTML;
var nuevo = "<tr> <td> "+ nom +"</td> <td>"+ ape +"</td> <td>"
+ nac +"</td> <td>"+ tel +"</td> <td>"+ text +"</td> <td>"
+ ciu +"</td> </tr>";
 tab.innerHTML  = op + nuevo;

}






//function myBlurFunction() {
//  document.getElementById("pais");
//}
