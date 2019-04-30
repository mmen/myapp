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
@$todo=$_GET['todo'];
//////////////
if($todo=='update_pdo_admin' ){

$count=$dbo->prepare("update  pdo_admin set status='T' "); 
if($count->execute()){
////////////
$no=$count->rowCount();
echo "<font color=green> No of records updated from pdo_admin table = $no</font>";
}else{
echo "<font color=red>Fail to execute query</font>";
}

}///////////

echo "<table class='t1'>
<tr><th>Details</th><th>Button</th></tr>
<tr class='r1'><td >Click here to Update  pdo_admin Table</td><td><input type=button onClick=\"location.href='pdo-rowcount.php?todo=update_pdo_admin'\" value='Update'></td></tr>
</table>


";


echo "<br><br><br>You can reinstall the table with records by using sql_dump file";

/////////////////////
?>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo-rowcount.php>www.plus2net.com/php_tutorial/pdo-rowcount.php</a>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo.php rel='nofollow'>PHP MySQL basic script using PDO from plus2net.com</a>

</body>
</html>
