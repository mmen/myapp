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
$filename = "sql_dump.txt"; // This is at root of the file using this script.
$fd = fopen ($filename, "r"); // opening the file in read mode
$contents = fread ($fd, filesize($filename)); // reading the content of the file
fclose ($fd);               // Closing the file pointer
//echo $contents; 
$sql_part=explode(";",$contents,-1);
////////////////////////
@$todo=$_POST['todo'];
if(isset($todo) and $todo =='execute-query'){
$box=$_POST['c1'];
while (list ($key,$val) = @each ($box)) {
$count=$dbo->prepare("$sql_part[$val]");
if($count->execute()){
echo "<font color=green> Success</font>";
}else{
echo "<font color=red>Query Failed</font>";
}
}
}
$i=1;
echo "<form method=post action=pdo-execute-dump.php><input type=hidden name=todo value='execute-query'><table class='t1'>";
while (list ($key, $val) = each ($sql_part)) { 
$m=$i%2;
echo "<tr class='r$m'><td><input type=checkbox name=c1[] value=$key></td><td>$val</td></tr>";
$i=$i+1;
}
echo "<tr><td clospan=3><input type=submit value=Execute>
</table ></form>";
?>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo-records.php>www.plus2net.com/php_tutorial/pdo-records.php</a>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdo.php rel='nofollow'>PHP MySQL basic script using PDO from plus2net.com</a>
</body>
</html>
