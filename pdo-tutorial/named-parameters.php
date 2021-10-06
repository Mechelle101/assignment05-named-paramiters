<?php

include 'connect.php';

//simple sql query and foreach loop
$stmt = $db->prepare("SELECT * FROM names where firstname = :firstname");
  //can put in a third parameter for the data type PDO::PARAM_STR
  $stmt->bindValue(':firstname', 'Andy');

  $stmt->execute();

  //can use PDO::FETCH_ASSOC to get the accusative array or PDO::FETCH_NUM to get the numbered array
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);

    echo $firstname . " " . $lastname . " " . $postcode . "<br>";
  }

?>