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
echo "
<table class='t1'><form name=form1 method=post action='pdo-insert2.php'>
<input type=hidden name=todo value=post>

<tr><th colspan=2>Signup</th></tr>
<tr><td>User ID</td><td><input type=text name=userid></td></tr>

<tr class='r1'><td >Password</td><td ><input type=text name=password></td></tr>
<tr class='r0'><td >Re-enter Password</td><td ><input type=text name=password2></td></tr>

<tr class='r1'><td >Email</td><td  ><input type=text name=email></td></tr>
<tr class='r0'><td >Name</td><td ><input type=text name=name></td></tr>

<tr class='r1'><td >Sex</td><td > <input type='radio' value=male checked name='sex'>Male <input type='radio' value=female  name='sex'>Female</td></tr>

<tr class='r0'><td >I agree to terms and conditions</td><td ><input type=checkbox name=agree value='yes'></td></tr>

<tr class='r1'><td ></td><td><input type=submit value=Signup></td></tr>
</table>

";


?>
<a href=http://www.plus2net.com/php_tutorial/pdo-insert.php>www.plus2net.com/php_tutorial/pdo-insert.php</a>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo.php rel='nofollow'>PHP MySQL basic script using PDO from plus2net.com</a>

</body>
</html>
