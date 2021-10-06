<?php

include 'connect.php';

//simple sql query and foreach loop
foreach($db->query("SELECT * FROM names") as $row) {
  echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>"; 
}

?>