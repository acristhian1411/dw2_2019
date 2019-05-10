<?php
session_start();
print_r($_GET);
 ?>
<html>
<head></head>
<body>
  <form action="sessiones.php" method="POST">
      <div>
          <label for="name">Nombre:</label>
          <input type="text" name="nombre"/>
      </div>
      <div>
          <label for="mail">Apellido:</label>
          <input type="text" name="apellido" />
      </div>
      <div>
          <label for="msg">Fecha:</label>
          <input type="text" name="fecha" />
      </div>

      <div class="button">
          <button type="submit">enviar</button>
      </div>
  </form>
   <br>
  <a href="session_fin.php"> terminar </a> <br>
  <a href="sessiones.php"> inicio </a>

</body>
</htm>
