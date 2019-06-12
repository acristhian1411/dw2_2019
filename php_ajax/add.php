<?php
if ($_POST)
{
//echo "entro post";
require 'conex.php';
$conex = connectDB();
$mensajes=[];
//print_r($_POST);

if ($_POST['nombre']=="")
{
  array_push($mensaje,"Debe ingresar un nombre");
}
if ($_POST['apellido']=="")
{
  array_push($mensaje,"Debe ingresar un apellido");
}
if ($_POST['cedula']=="")
{
 array_push($mensaje,"Debe ingresar un cedula");
}
if ($_POST['fecha_nac']=="")
{
 array_push($mensaje,"Debe ingresar una fecha");
}
if (count($mensajes)==0)
{
$sql="insert into personas (nombre, apellido, cedula, fecha_nac) values ('".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["cedula"]."','".$_POST["fecha_nac"]."') ";
$res=mysqli_query($conex,$sql);
if (mysqli_error($conex)==null)
{

echo 'ok';
} else { echo 'fail'; }
}

}
?>
