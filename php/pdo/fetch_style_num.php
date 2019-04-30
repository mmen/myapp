<?php

require_once('includes/conn.inc.php');

$stm = $pdo->query("SELECT * FROM student");

$rows = $stm->fetchAll(PDO::FETCH_NUM);

foreach($rows as $row) {

    printf("$row[0] $row[1] $row[2]\n");
}

?>