<?php
session_start();
//$valor=array("nombre"=>$_POST["nombre"], "apellido"=>$_POST["apellido"], "fecha"=>$_POST["fecha"]);
$valor["nombre"]=$_POST["nombre"];
$valor["apellido"]=$_POST["apellido"];
$valor["fecha"]=$_POST["fecha"];


if (!isset($_SESSION["datos"])) {
$_SESSION["datos"]=[];
}
array_push($_SESSION["datos"],$valor);
//echo "";
//print_r($valor);
print_r ($_SESSION);
 ?>
 <html>
 <body>
 <pre>
   <?php //print_r($_POST); ?>
</pre>
<table>
<tr><th>nombre</th><th>apellido</th><th>fecha</th></tr>
<?php
foreach ($_SESSION["datos"] as $d)
{

  ?>
<tr>
  <td><?php echo $d["nombre"];  ?></td>
  <td><?php echo $d["apellido"]; ?></td>
  <td><?php echo $d["fecha"]; ?></td>
</tr>
  <?php
}
 ?>
</table> <br>
<a href="session_fin.php"> terminar </a> <br>
<a href="form2.php?saludo=hola&persona=juan"> Formulario </a>
</body>
</html>
