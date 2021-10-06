<?php

include 'connect.php';

$stmt = $db->prepare("UPDATE names SET postcode = :postcode 
                      WHERE firstname = :firstname");

$stmt->bindValue(':firstname', 'Andy');
$stmt->bindValue(':postcode', 'Changed Code 1234');
$stmt->execute();


?>