<?php

include 'connect.php';

//simple sql query and foreach loop 
$stmt = $db->prepare("SELECT common_name, food, habitat FROM birds WHERE food = :food AND habitat = :habitat");
  $stmt->bindValue(':food', 'insects');
  $stmt->bindValue(':habitat', 'open woodlands');
  $stmt->execute();
  echo "These birds like insects and open woodlands <br>";
  while($row = $stmt->fetch()) {
    
    $output = htmlentities($row['common_name']);

    echo $output . "<br>";
  }

?>