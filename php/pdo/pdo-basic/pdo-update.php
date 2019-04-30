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
//////////////////////////////////////
$id=2; // member id is fixed here 
$count=$dbo->prepare("select * from pdo_admin WHERE id=:id");
$count->bindParam(":id",$id,PDO::PARAM_INT,1);

if($count->execute()){
echo " Success <br>";
$row = $count->fetch(PDO::FETCH_OBJ);
}else{
print_r($dbo->errorInfo());
}
/// Display the form to collect fresh data /// 
echo "<form name='myForm' action='pdo-update2.php' method=post><input type=hidden name=id value='$id'>
<table class='t1'> <input type=hidden name=todo value='change-data'>
<tr><th colspan=2>Update Profile $row->userid</th></tr>
<tr class='r1'><td>Name</td><td><input type=text name='name' value='$row->name'></td></tr>
<tr class='r0'><td>Password</td><td><input type=text name='password' value='$row->password'></td></tr>
<tr class='r1'><td></td><td><input type=submit value='Submit'></td></tr>

</table></form>
";

/////////////////////
?>
<a href=http://www.plus2net.com/php_tutorial/pdo-update.php>www.plus2net.com/php_tutorial/pdo-update.php</a>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo.php rel='nofollow'>PHP MySQL basic script using PDO from plus2net.com</a>

</body>
</html>
