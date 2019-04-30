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
//echo "<a href=pdo-delete.php?todo=delete_pdo_admin>Click here to delete All records of pdo_admin Table</a> ";

@$todo=$_GET['todo'];
//////////////
if($todo=='delete_pdo_admin' ){
$count=$dbo->prepare("DROP TABLE  pdo_admin");
if($count->execute()){
////////////
echo "<font color=green> pdo_admin table deleted</font>";
}else{
echo "<font color=red>Fail to execute query</font>";
}
///////////
}
////////////////////////////////////
if($todo=='delete_student' ){
$count=$dbo->prepare("DROP TABLE  student");
if($count->execute()){
////////////
echo "<font color=green> student Table deleted</font>";
}else{
echo "<font color=red>Fail to execute query</font>";
}
}
//////////////////
$i=1;
echo "<table class='t1'>
<tr><th>Details</th><th>Button</th></tr>
<tr class='r1'><td >Delete table and all records of pdo_admin Table</td><td><input type=button onClick=\"location.href='pdo-drop.php?todo=delete_pdo_admin'\" value='Delete'></td></tr>
<tr class='r0'><td >Delete table and all records of student Table</td><td><input type=button onClick=\"location.href='pdo-drop.php?todo=delete_student'\" value='Delete'></td></tr>
</table>";

echo "<br><br><br>You can reinstall the table with records by using sql_dump file or Visit the Reinitialize link at top menu";
/////////////////////
?>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo-drop.php>www.plus2net.com/php_tutorial/pdo-drop.php</a>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo.php rel='nofollow'>PHP MySQL basic script using PDO from plus2net.com</a>

</body>
</html>
