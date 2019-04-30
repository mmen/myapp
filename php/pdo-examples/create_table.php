<?php

require_once('includes/conn.inc.php');

$sql = "CREATE TABLE words(id INT PRIMARY KEY AUTO_INCREMENT,
    word VARCHAR(255))";

$ret = $pdo->exec($sql);
$pdo->exec("INSERT INTO words(word) VALUES ('pen')");
$pdo->exec("INSERT INTO words(word) VALUES ('bum')");
$pdo->exec("INSERT INTO words(word) VALUES ('hum')");
$pdo->exec("INSERT INTO words(word) VALUES ('den')");

$rowid = $pdo->lastInsertId();

echo "The last inserted row id is: $rowid\n";

?>