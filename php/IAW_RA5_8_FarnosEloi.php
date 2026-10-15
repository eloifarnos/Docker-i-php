<?php

$num1 = 5;
$num2 = 10;

echo "Abans del canvi:<br>";
echo "num1 val: $num1<br>";
echo "num2 val: $num2<br><br>";

// Guardem el valor de num1 en una variable temporal
$temp = $num1;

// Posem el valor de num2 dins de num1
$num1 = $num2;

// Posem el valor guardat dins de num2
$num2 = $temp;

echo "Després del canvi:<br>";
echo "num1 val: $num1<br>";
echo "num2 val: $num2";

?>