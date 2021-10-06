<?php

include 'connect.php';

$stmt = $db->prepare("update names set postcode = :postcode 
                      where firstname = :firstname");

$stmt->bindValue(':firstname', 'Andy');
$stmt->bindValue(':postcode', 'Changed Code 1234');
$stmt->execute();


?>