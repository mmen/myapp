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
//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
//////// End of Database connection /////////
//print_r(PDO::getAvailableDrivers());

         if(in_array("mysql",PDO::getAvailableDrivers())){
 																		echo " <br><font face='Verdana' size='2' color=green>You have PDO for MySQL driver installed</font> ";

             }
              else {
                        echo "<font face='Verdana' size='2' color=red>PDO driver for MySQL is not installed in your system</font>";

               
                    } 
 require "config.php"; // Database connection details. 


$result = $dbo->query("show processlist");
$row=$result->fetch(PDO::FETCH_OBJ);
$i=1;
echo "<table class='t1'>";
while (list ($key, $val) = each ($row)) { 
$m=$i%2;
echo "<tr class='r$m'><td>$key</td><td>$val</td></tr>"; 
$i=$i+1;
}
echo "</table>";

echo "<br><br><br><br>You can read more on PDO installation at <a href=http://www.plus2net.com/php_tutorial/pdo-installation.php>http://www.plus2net.com/php_tutorial/pdo-installation.php</a><br><br> ";

?>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo.php rel='nofollow'>PHP MySQL basic script using PDO from plus2net.com</a>

</body>
</html>
