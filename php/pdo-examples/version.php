<?php

require_once('includes/conn.inc.php');

$stm = $pdo->query("SELECT VERSION()");

$version = $stm->fetch();

echo $version[0] . PHP_EOL;

?>