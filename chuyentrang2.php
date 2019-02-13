<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
if(isset($_POST['submit'])){$value1 = $_POST['value1'];
$value2 = $_POST['value2'];
$action = $_POST['action'];
if($action=="Addition"){
echo "<b>Result:</b><br>";
echo $value1+$value2;
}
if($action=="Subtraction"){
echo "<b>Result:</b><br>";
echo $value1-$value2;
}
if($action=="multiplication"){
echo "<b>Result:</b><br>";
echo $value1*$value2;
}
if($action=="division"){
echo "<b>Result:</b><br>";
echo $value1/$value2;
}
}
?>
</body>
</html>