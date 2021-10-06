<?php

include 'connect.php';

$stmt = $db->prepare("INSERT INTO birds (common_name, habitat, food, conservation_id, backyard_tips)
                      VALUES (:common_name, :habitat, :food, :conservation_id, :backyard_tips)");

$stmt->bindValue(':common_name', 'AnotherBirdName');
$stmt->bindValue(':habitat', 'still anywhere');
$stmt->bindValue(':food', 'more bugs');
$stmt->bindValue(':conservation_id', '3');
$stmt->bindValue(':backyard_tips', 'Always be nice to the bird');
$stmt->execute();


?>