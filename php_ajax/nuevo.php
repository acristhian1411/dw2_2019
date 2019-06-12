
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nueva Persona</title>
  </head>
  <body>
    <div class="mensajes">

    </div>
    <div id="lista">
      <?php
include 'lista.php';
       ?>
    </div>
    <h2> Agregar Persona</h2>
    <form id="formu" method="post">
      <input type="text" name="nombre" value="" placeholder="Nombres"> <br>
      <input type="text" name="apellido" value="" placeholder="Apellidos"><br>
      <input type="text" name="cedula" value="" placeholder="cedula"><br>
      <input type="date" name="fecha_nac" value="" placeholder="Fecha"><br>
      <input type="button" name="" id="btenviar" value="Enviar"><br>
    </form>
    <a href="lista.php">Volver a la lista</a>

  <script  src="jquery.min.js"></script>

  <script type="text/javascript">
  $("#btenviar").click(function ()
  {
     $.ajax(
            {
              url: 'add.php' ,
              type: 'POST',
              dataType:'html',
              data: $('#formu').serialize()
            } )
            .done(function(data){
//$(".mensajes").html(data);
//alert(data);
recargar_lista();
//if (data=='ok') { alert('es ok');}

});

   });
function recargar_lista()
{
  $.ajax(
         {
           url: 'lista.php' ,
           type: 'GET',
           dataType:'html',
         } )
         .done(function(data){
           $("#lista").html(data);
         });
}

  </script>
  </body>
</html>
