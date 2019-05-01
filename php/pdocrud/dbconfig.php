<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','dbadmin');
define('DB_PASS','MdpAdmin@2019');
define('DB_NAME','pdocrud');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>