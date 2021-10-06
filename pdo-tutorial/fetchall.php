<?php

include 'connect.php';

//simple sql query and foreach loop
$stmt = $db->query("SELECT * FROM names");

//can put in (PDO::FETCH_ASSOC) to get the associative array
$results = $stmt->fetchALL();

foreach($results as $row) {
  
  $firstname = htmlentities($row['firstname']);
  $lastname = htmlentities($row['lastname']);
  $postcode = htmlentities($row['postcode']);

  echo $firstname . " " . $lastname . " " . $postcode . "<br>";

}

?>