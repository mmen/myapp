<?php

require_once('includes/conn.inc.php');

$id = 4;

$stm = $pdo->prepare("SELECT * FROM student WHERE id = :id");
$stm->bindParam(":id", $id, PDO::PARAM_INT);
$stm->execute();

$row = $stm->fetch(PDO::FETCH_ASSOC);

echo "Id: " . $row['id'] . PHP_EOL;
echo "Name: " . $row['name'] . PHP_EOL;
echo "Class: " . $row['class'] . PHP_EOL;

?>