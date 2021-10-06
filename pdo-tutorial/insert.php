<?php

include 'connect.php';

$stmt = $db->prepare("insert into names (firstname, lastname, postcode)
                      values (:firstname, :lastname, :postcode)");

$stmt->bindValue(':firstname', 'AnotherFirstName');
$stmt->bindValue(':lastname', 'YetAnotherLastName');
$stmt->bindValue(':postcode', 'Another Code 1234');
$stmt->execute();


?>