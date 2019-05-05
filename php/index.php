<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <ul>
  <?php

    $a = 7;
    for ($i=1; $i <= 10 ; $i++) {
      echo "<li>".$a."*".$i."=".$a*$i."</li>";
    }

   ?>
 </ul>
  </body>
</html>
