<?php

include 'connect.php';

//simple sql query and foreach loop 
$stmt = $db->prepare("SELECT common_name, backyard_tips FROM birds WHERE backyard_tips LIKE :backyard_tips");
  $stmt->bindValue(':backyard_tips', '%feeder%');
  $stmt->execute();
  
  echo "These birds use a backyard feeder <br>";
  while($row = $stmt->fetch()) {
    
    $output = htmlentities($row['common_name']);

    echo $output . "<br>";
  }

?>