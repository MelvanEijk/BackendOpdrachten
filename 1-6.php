<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="number" name="Celsius" value=""><br>
     <input type="submit" name="submit" value="submit">
  </body>
</html>

<?php
$Celsius= $_POST ["Celsius"];
$null = NULL;


if ($_POST['Celsius'] != "$null") {
  $Celsius = $_POST['Celsius'];
  echo ($Celsius * 1.8 + 32);
} else {
  echo "No input";
}
 ?>
