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
$name=$_POST['name'];
$password=$_POST['password'];
$id=$_POST['id'];
///////// End of data collection /// 
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);

$sql=$dbo->prepare("update pdo_admin set name=:name,password=:password where id=:id");
$sql->bindParam(':name',$name,PDO::PARAM_STR, 25);
$sql->bindParam(':password',$password,PDO::PARAM_STR, 15);
$sql->bindParam(':id',$id,PDO::PARAM_INT, 5);

if($sql->execute()){
echo "Successfully updated Profile";
}// End of if profile is ok 
else{
print_r($sql->errorInfo()); // if any error is there it will be posted
$msg=" Database problem, please contact site admin ";
}

?>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo.php rel='nofollow'>PHP MySQL basic script using PDO from plus2net.com</a>

</body>
</html>
