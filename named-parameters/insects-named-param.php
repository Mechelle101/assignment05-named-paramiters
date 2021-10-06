<?php

include 'connect.php';

//simple sql query and foreach loop 
$stmt = $db->prepare("SELECT common_name, food FROM birds WHERE food = :food");
  $stmt->bindValue(':food', 'insects');
  $stmt->execute();

  echo "These birds like insects<br>";
  while($row = $stmt->fetch()) {
    
    $output = htmlentities($row['common_name']);

    echo $output . "<br>";
  }

?>