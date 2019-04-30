<?php

require_once('includes/conn.inc.php');

try {

    $pdo->beginTransaction();
    $stm = $pdo->exec("INSERT INTO student(id, name, class, mark) VALUES (5, 'Molin Men', 'Six', 83)");
    $stm = $pdo->exec("INSERT INTO student(id, name, class, mark) VALUES (6, 'Chan Dara', 'Seven', 92)");

    $pdo->commit();

} catch(Exception $e) {

    $pdo->rollback();
    throw $e;
	
}

?>