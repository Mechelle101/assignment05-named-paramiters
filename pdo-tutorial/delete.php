<?php

include 'connect.php';

$stmt = $db->prepare("delete from names where firstname = :firstname");

$stmt->bindValue(':firstname', 'Brian');
$stmt->execute();


?>