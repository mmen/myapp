<?php

require_once('includes/conn.inc.php');

$id = 12;

$nrows = $pdo->exec("DELETE FROM student WHERE id IN (1, 2, 3)");

echo "The statement affected $nrows rows\n";

?>