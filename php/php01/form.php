<?php
session_start();
 ?>


<html>
<head></head>
<body>

<?php

if ($_GET) {
  echo "<pre>";
//echo "nombre= ".$_POST['name']." : email= ".$_POST['mail']." : msg= ".$_POST['msg']." <br>";
echo "nombre= ".$_GET['name']." : email= ".$_GET['mail']." : msg= ".$_GET['msg']." <br>";
  echo "</pre>";
}
?>

  <form action="form.php" method="get">
      <div>
          <label for="name">Name:</label>
          <input type="text" name="name" value="<?php echo $_GET['name']; ?>" />
      </div>
      <div>
          <label for="mail">E-mail:</label>
          <input type="text" name="mail" />
      </div>
      <div>
          <label for="msg">Message:</label>
          <textarea name="msg"><?php echo $_GET['msg']; ?></textarea>
      </div>

      <div class="button">
          <button type="submit">enviar</button>
      </div>
  </form>
</body>
</htm>
