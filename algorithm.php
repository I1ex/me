<!DOCTYPE html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php

$x = rand(1,100);
//$x = $_GET["x"];
$var1 = 1;
$var2 = 1;
 echo "$x </br>";

while ($var1 <=  $x)
{
	if ($var1 > $x )
	{
		echo 'Задуманное число Не входит в числовой ряд';
		
	}
	elseif ($var1 === $x)
	{
		echo 'Задуманное число входит в числовой ряд';
	} 
	else ($var3 = $var1 || $var1 = $var1 + $var2 || $var2 = $var3);
$var1++;
 }
