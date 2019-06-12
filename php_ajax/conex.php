<?php
function connectDB(){
  $servidor="localhost";// 127.0.0.1
  $usuario="root";
  $password="";
  $db="practica";
  $con = mysqli_connect($servidor,$usuario,$password,$db);
      if($con){
      //  echo '<br> La conexión de la base de datos se ha hecho satisfactoriamente <br>';
    }else{
        echo 'Ha sucedido un error inesperado en la conexión de la base de datos';
    }
    return $con;
}

function disconnectDB($con){
    $close = mysqli_close($con);
    if($close){
        echo '<br> La desconexión de la base de datos se ha hecho satisfactoriamente <br>';
    }else{
        echo '<br> Ha sucedido un error inesperado en la desconexión de la base de datos <br>';
    }
    return $close;
}
connectDB();
?>
