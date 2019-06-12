<?php

include 'conex.php';


if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['apellido']) && !empty($_POST['apellido'])&&
isset($_POST['cedula']) && !empty($_POST['cedula']) && isset($_POST['fecha_nac']) && !empty($_POST['fecha_nac']) && isset($_POST['mensaje']) && !empty($_POST['mensaje'])){
//$date = date('Y-m-d H:i:s');

$con = connectDB();
$insert = "INSERT INTO personas (nombre, apellido, cedula, fecha_nac, mensaje) VALUES ('$_POST[nombre]', '$_POST[apellido]','$_POST[cedula]', '$_POST[fecha_nac]', '$_POST[mensaje]')";

mysqli_query($con, $insert);

header("Location:index.php");
}
else{

echo "Error al insertar datos.";

}

mysqli_close($con);

?>
