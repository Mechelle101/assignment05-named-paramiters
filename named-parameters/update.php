<?php

include 'connect.php';

$stmt = $db->prepare("UPDATE birds SET conservation_id = :conservation_id 
                      WHERE common_name = :common_name");

$stmt->bindValue(':common_name', 'BirdName');
$stmt->bindValue(':conservation_id', '5');
$stmt->execute();

?>