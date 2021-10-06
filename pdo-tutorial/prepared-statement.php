<?php

include 'connect.php';

//simple sql query and foreach loop
$stmt = $db->prepare("SELECT * FROM names WHERE firstname = ?");
$names = array('Andy', 'Brian', 'Godfrey');
$name = 'Colin';

foreach($names as $name) {
  $stmt->bindParam(1, $name);

  $stmt->execute();

  //can use PDO::FETCH_ASSOC to get the accusative array or PDO::FETCH_NUM to get the numbered array
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);

    echo $firstname . " " . $lastname . " " . $postcode . "<br>";
  }
}
?>