<?php

require_once('includes/conn.inc.php');

$stm = $pdo->query("SELECT * FROM student WHERE id=1");

$col_meta = $stm->getColumnMeta(0);

echo "Table name: {$col_meta["table"]}\n";
echo "Column name: {$col_meta["name"]}\n";
echo "Column length: {$col_meta["len"]}\n";
echo "Column flags: {$col_meta["flags"][0]} {$col_meta["flags"][1]} \n";

?>