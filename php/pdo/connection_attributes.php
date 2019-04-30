<?php

require_once('includes/conn.inc.php');

$driver = $pdo->getAttribute(PDO::ATTR_DRIVER_NAME);
$server_version = $pdo->getAttribute(PDO::ATTR_SERVER_VERSION);
$autocommit_mode = $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT);

echo "Driver: $driver\n";
echo "Server version: $server_version\n";
echo "Autocommit mode: $autocommit_mode\n";

?>