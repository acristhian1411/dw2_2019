
$("#pais").change(function(){
  var p = $("#pais").val();
  var c = $("#ciudad");
  var ciudad = [["Encarnacion",1], ["Pilar",1], ["Ca´acupe",1], ["Asuncion",1],
   ["Bs As",2], ["Cordoba", 2],["Posadas",2],
   ["Rio",3], ["bahia",3],["Sao paulo",3],
 ["Montevideo",4],["Durazno",4],["Canelones",4],
 ["Santa cruz",5],["La paz",5], ["Cochabamba",5]];
  var op;
  for (var i = 0; i < ciudad.length; i++) {
    if (ciudad[i][1] == p) {
      op = op + "<option value= "+ciudad[i][0]+" > "  +ciudad[i][0]+"</option> " ;
    } // if
  } // for
  c.html(op);
})

$("#enviar").click(function(){
  var c = $("#tabla");
  var op;
  var nom = $("#nombre").val();
  var ape = $("#apellido").val();
  var nac = $("#fecha").val();
  var tel = $("#telefono").val();
  var p = $("#pais option:selected ").text();
  var ciu = $("#ciudad").val();

if (validar()) {
  op = c.html();
  var nuevo = "<tr> <td> "+ nom +"</td> <td>"+ ape +"</td> <td>"
  + nac +"</td> <td>"+ tel +"</td> <td>"+ p +"</td> <td>"
  + ciu +"</td> </tr>";
   c.html(op + nuevo);
  return false;
} else {
//alert("Debe completar los campos");
}
})

$("#limpiar").click(function(){
  var c = $("#tabla");
  var op;
  var nom = $("#nombre").val("");
  var ape = $("#apellido").val("");
  var nac = $("#fecha").val("");
  var tel = $("#telefono").val("");
  var p = $("#pais").val(0);
  var ciu = $("#ciudad").html("");

 return false;
})


$("#login").submit(function(e) {
e.preventDefault();
});

function validar(){
  var nom = $("#nombre").val();
  var ape = $("#apellido").val();
  var nac = $("#fecha").val();
  var tel = $("#telefono").val();
  var p = $("#pais option:selected ").text();
  var ciu = $("#ciudad").val();
  $('#errores').html("");

if (nom == "") {
$('#errores').append("Debe completar el nombre");
 return false;
}
if (ape == "") {
  $('#errores').append("Debe completar el apellido");
   return false;
}
if (!isDate(nac)) {
  $('#errores').append("Debe completar la fecha");
 return false;
}
if (tel == "") {
  $('#errores').append("Debe completar el telefono");
    return false;
}
if (p == null) {
  $('#errores').append("Debe elejir un pais");
    return false;
}
if (ciu == null) {
  $('#errores').append("Debe elejir una ciudad");
    return false;
}
return true;
}

function isDate(val) {
    var d = new Date(val);
    return !isNaN(d.valueOf());
}
