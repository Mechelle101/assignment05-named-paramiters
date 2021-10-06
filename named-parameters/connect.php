<?php

try {
  $db = new PDO('mysql:host=localhost;dbname=birdQueries;charset=utf8', 'MechellePresnell', 'Bri96And98Tyl01');
  // var_dump($db);
  // echo "<br>You are connected";
}
catch(Exception $e) {
  // echo $e->getMessage();
  echo "An error has occurred";
}


?>