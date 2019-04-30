<?php

require_once('includes/conn.inc.php');

$stm = $pdo->query("SELECT * FROM student WHERE id=1");

$ncols = $stm->columnCount();

echo "The result set contains $ncols columns\n";

?>