<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'conect.php';
    $sql = "select * from personas";

    function getArraySQL($sql){
        //Creamos la conexión con la función anterior
        $con = connectDB();
        //generamos la consulta
        if(!$result = mysqli_query($con, $sql)) die(); //si la conexión cancelar programa
        $rawdata = array(); //creamos un array
        //guardamos en un array multidimensional todos los datos de la consulta
        $i=0;
        while($row = mysqli_fetch_array($result))
        {
            $rawdata[$i] = $row;
            $i++;
        }
        disconnectDB($con); //desconectamos la base de datos
        return json_encode($rawdata, JSON_FORCE_OBJECT); //devolvemos el array
    }


    #echo "<br> esto es un array mostrado con echo <br>";
    echo "<br>";

    echo getArraySQL($sql);

    ?>

  </body>
</html>
