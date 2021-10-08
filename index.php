<!DOCTYPE html>
<html>
<body>

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
 
//var_dump(json_decode($jsonobj));
$obj = json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
echo "<br><br>";

$myArray = json_decode($jsonobj, true);
echo $myArray['Peter'];

?>

</body>
</html>