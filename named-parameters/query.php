<?php

include 'connect.php';

//simple sql query and foreach loop
foreach($db->query("SELECT food FROM birds WHERE food = 'insects'") as $row) {
  echo htmlentities($row['food']) . "<br>"; 
}

?>
