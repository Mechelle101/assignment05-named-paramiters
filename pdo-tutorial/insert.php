<?php

include 'connect.php';

$stmt = $db->prepare("INSERT INTO names (firstname, lastname, postcode)
                      VALUES (:firstname, :lastname, :postcode)");

$stmt->bindValue(':firstname', 'AnotherFirstName');
$stmt->bindValue(':lastname', 'YetAnotherLastName');
$stmt->bindValue(':postcode', 'Another Code 1234');
$stmt->execute();


?>