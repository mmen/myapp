<?php

require_once('includes/conn.inc.php');

/*
$stmt = $pdo->query('SELECT city FROM world');
while ($row = $stmt->fetch())
{
    echo $row['city'] . "\n";
}
*/

$sql= "SELECT city FROM world"; 
$stmt = $pdo->query($sql); 
$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo $row['city'];
//echo $row[age];

?>