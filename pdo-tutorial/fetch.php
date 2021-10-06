<?php

include 'connect.php';

//simple sql query and foreach loop
$stmt = $db->query("SELECT * FROM names");

//can use PDO::FETCH_ASSOC to get the accusative array or PDO::FETCH_NUM to get the numbered array
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>"; 
  echo "<pre>" . var_dump($row) . "</pre>";
}

?>