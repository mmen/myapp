<?php

require_once('includes/conn.inc.php');

$id = 3;

$stm = $pdo->prepare("SELECT * FROM student WHERE id = ?");
$stm->bindValue(1, $id);
$stm->execute();

$row = $stm->fetch(PDO::FETCH_ASSOC);

echo "Id: " . $row['id'] . PHP_EOL;
echo "Name: " . $row['name'] . PHP_EOL;
echo "Class: " . $row['class'] . PHP_EOL;

?>