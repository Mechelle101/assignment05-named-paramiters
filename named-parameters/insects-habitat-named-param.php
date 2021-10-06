<?php

include 'connect.php';

//simple sql query and foreach loop 
$stmt = $db->prepare("SELECT food, habitat FROM birds WHERE food = :food AND habitat = :habitat");
  $stmt->bindValue(':food', 'insects');
  $stmt->bindValue(':habitat', 'open woodlands');
  $stmt->execute();

  while($row = $stmt->fetch()) {
    
    $output = htmlentities($row['food']) . " " . htmlentities($row['habitat']);

    echo $output . "<br>";
  }

?>