<?php

include 'connect.php';

//simple sql query and foreach loop 
$stmt = $db->prepare("SELECT food FROM birds WHERE food = :food");
  $stmt->bindValue(':food', 'insects');
  $stmt->execute();

  while($row = $stmt->fetch()) {
    
    $food = htmlentities($row['food']);

    echo $food . "<br>";
  }

?>