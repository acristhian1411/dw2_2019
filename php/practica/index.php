<?php

include "conex.php";

?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="cssfile.css">
<meta charset="utf-8">
<title>Formulario de Registro </title>
</head>
<body>
  <div id="cabecera" style="text-align: center; height: 60px; margin-left: 100px; margin-right: 100px; border: 1px solid black;"></div>

    <?php $con = connectDB();

    $sql = "SELECT * from personas";

    $resultado = mysqli_query($con, $sql);

    while($mostrar= mysqli_fetch_array($resultado)){
      ?>
  <div id="contenedorMySQL">
  <div id= "izquierdo">
    <table>
      <tr>
        <td style="text-align:center;", id="usuario"><?php echo $mostrar['nombre']; ?></td>
        <tr>
          <td style="text-align:center;"><?php echo $mostrar['apellido']; ?></td>
        </tr>
        <tr>
          <td style="text-align:center;"><?php echo $mostrar['cedula']; ?></td>
          <td style="text-align:center;"><?php echo $mostrar['fecha_nac']; ?></td>
        </tr>
      </table>
      </div>
  <div id="derecho" ><?php echo $mostrar['mensaje']; ?></div>

  </div>
<?php } ?>
<div id="form" >
<form method="POST" action="registro.php" style="padding-left:200px;"/>
<table>
<tr>
<td>nombre: </td>
<td><input type="name" name="nombre" required/></td>
</tr>
<tr>
<td>apellido: </td>
<td><input type="name" name="apellido" required/></td>
</tr>
<td>cedula: </td>
<td><input type="name" name="cedula" required/></td>
<td>fecha: </td>
<td><input type="date" name="fecha_nac" required/></td>

</tr>
<tr>
<td>Mensaje: </td>
<td><input type="textarea" name="mensaje" style="height:50px; width:300px;" required/></td>
</tr>

</table>
<input type="submit" value="Enviar" style="margin-right:250px;"/>
</form>
</div>
<script type="text/javascript" src="jquery.min.js"></script>

</body>
</html>
