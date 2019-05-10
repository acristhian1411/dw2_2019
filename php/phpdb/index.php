<?php
require 'conex.php';
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
<tr><th>nombre</th><th>apellido</th><th>fecha</th></tr>
<?php

while ($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
?>

<tr>
  <td><?php echo $row["nombres"];  ?></td>
  <td><?php echo $row["apellidos"]; ?></td>
  <td><?php echo $row["fecha_nac"]; ?></td>
</tr>

<?php
}

 ?>
