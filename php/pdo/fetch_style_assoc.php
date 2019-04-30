<?php

require_once('includes/conn.inc.php');

$stm = $pdo->query("SELECT * FROM student");

$rows = $stm->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row) {

    printf("{$row['id']} {$row['name']} {$row['class']} {$row['mark']}\n");
}

?>