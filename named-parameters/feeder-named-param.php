<?php

include 'connect.php';

//simple sql query and foreach loop 
$stmt = $db->prepare("SELECT common_name, backyard_tips FROM birds WHERE backyard_tips LIKE :backyard_tips");
  $stmt->bindValue(':backyard_tips', '%feeder%');
  //$stmt->bindValue(':backyard_tips', '%feeder%');
  $stmt->execute();

  while($row = $stmt->fetch()) {
    
    $output = htmlentities($row['common_name']) . " | " . htmlentities($row['backyard_tips']);

    echo $output . "<br>";
  }

?>