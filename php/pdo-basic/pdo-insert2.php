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

/////////////Collect form data/////////////
$userid=$_POST['userid'];
$password=$_POST['password'];
$name=$_POST['name'];
$status='F';
///////// End of data collection /// 

////////////// Inserting data to table /////////
$sql=$dbo->prepare("insert into pdo_admin(userid,password,name,status) values(:userid,:password,:name,:status)");
$sql->bindParam(':userid',$userid,PDO::PARAM_STR, 15);
$sql->bindParam(':password',$password,PDO::PARAM_STR, 15);
$sql->bindParam(':name',$name,PDO::PARAM_STR,25);
$sql->bindParam(':status',$status,PDO::PARAM_STR);
if($sql->execute()){
$mem_id=$dbo->lastInsertId(); 
echo " Thanks .. Your Membership id = $mem_id ";
}
else{
echo " Not able to add data please contact Admin <br>";
print_r($sql->errorInfo()); 
}


?>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo.php rel='nofollow'>PHP MySQL basic script using PDO from plus2net.com</a>

</body>
</html>
