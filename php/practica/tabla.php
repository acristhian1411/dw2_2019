<?php
require 'conex.php';

$con =connectDB();
$sql="select * from personas";
//$sql="insert into personas (nombres, apellidos, fecha_nac) values (".$_POST["nombres"].",".$_POST["apellidos"].",".$_POST["fecha_nac"].") ";
$res=mysqli_query($con,$sql);
echo "Affected rows: " . mysqli_affected_rows($con);
//$row=mysqli_fetch_array($res,MYSQLI_ASSOC);




 ?>
 <html>
 <body>
 <pre>
</pre>
<table>
<tr><th>nombre</th><th>apellido</th><th>cedula</th><th>fecha</th></tr>
<?php

while ($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
?>

<tr>
  <td><?php echo $row["nombre"];  ?></td>
  <td><?php echo $row["apellido"]; ?></td>
  <td><?php echo $row["cedula"]; ?></td>
  <td><?php echo $row["fecha_nac"]; ?></td>
</tr>

<?php
}

 ?>
