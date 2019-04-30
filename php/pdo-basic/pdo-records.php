<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>plus2net MySQL Admin using show record</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?Php
////////////////
require "config.php"; // Database Connection
////////////////
include "menu.php";
/////// Display records /////
///Display  Single column of student table /// 

$sql="SELECT name  FROM student "; 

echo "<table>
<tr><th>Name</th></tr>";

foreach ($dbo->query($sql) as $row) {
echo "<tr ><td>$row[name]</td>";
}
echo "</table>";


//////////// End //////////
////////// Display multiple columns of student table //////
$sql="SELECT *  FROM student "; 
$i=1;
echo "<table class='t1'>
<tr><th>ID</th><th>Name</th><th>Class</th><th>Mark</th></tr>";

foreach ($dbo->query($sql) as $row) {
$m=$i%2;

echo "<tr class='r$m'><td>$row[id]</td><td>$row[name]</td><td>$row[class]</td><td>$row[mark]</td></tr>";
$i=$i+1;
}
echo "</table>";
///////////////
//////// Display with condition /////
$i=1;

$sql="SELECT *  FROM student WHERE class='four' "; 

echo "<table class='t1'>
<tr><th>ID</th><th>Name</th><th>Class</th><th>Mark</th></tr>";

foreach ($dbo->query($sql) as $row) {
$m=$i%2;
echo "<tr class='r$m'><td>$row[id]</td><td>$row[name]</td><td>$row[class]</td><td>$row[mark]</td></tr>";
$i=$i+1;
}
echo "</table>";
/////////////////////
////////// Display multiple columns of Admin  table //////
echo "<br>Records of Admin Table ";
$sql="SELECT *  FROM pdo_admin "; 

echo "<table class='t1'>
<tr><th>ID</th><th>userid</th><th>Name</th><th>Password</th><th>Status</th></tr>";
$i=1;
foreach ($dbo->query($sql) as $row) {
$m=$i%2;
echo "<tr class='r$m'><td>$row[id]</td><td>$row[userid]</td><td>$row[name]</td><td>$row[password]</td><td>$row[status]</td></tr>";
$i=$i+1;
}
echo "</table>";
///////////////

?>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo-records.php>www.plus2net.com/php_tutorial/pdo-records.php</a>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo.php rel='nofollow'>PHP MySQL basic script using PDO from plus2net.com</a>
</body>
</html>
