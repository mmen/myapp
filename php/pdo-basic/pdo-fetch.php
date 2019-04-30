<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>plus2net MySQL Admin using show record</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?Php
////////////////
include "menu.php";
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
require "config.php"; // Database connection details. 
//////// End of Database connection /////////
$id='3'; // Collecting one record with id=3
$count=$dbo->prepare("select * from pdo_admin where id=:id");
$count->bindParam(":id",$id,PDO::PARAM_INT,1);

if($count->execute()){
echo " Success <br>";

/// Display different type /// 
/// Change this part of the code to display in different types //

$row = $count->fetch(PDO::FETCH_LAZY);
print_r($row);
echo "<hr>";
echo "<br>Admin id = $row[0]";
echo "<br>userid = $row[userid]";
echo "<br>password=$row[2]<br>";

//////////////// End ///// 

}else{
print_r($dbo->errorInfo()); 
}
?>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo.php rel='nofollow'>PHP MySQL basic script using PDO from plus2net.com</a>

</body>
</html>
