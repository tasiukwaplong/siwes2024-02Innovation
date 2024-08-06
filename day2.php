<?php
//  define("RESUMPTION_DATE", "30th November 2024");
//  echo RESUMPTION_DATE;


//operators
$r = 10;
$a = 2;
$b = 3;
$c = 10;
$d = 5;
$areaOfCircle = pi() * $r ** 2;
$areaOfCircle2 = 3.142 * $r * $r;

$rslt = $a * $c + $b / $a * $d;

echo $areaOfCircle;
echo "<br>";
echo $areaOfCircle2;
echo "<br>";
echo $rslt;
echo "<br>";
$rslt2 = $a + $b;
echo $rslt2;
echo "<br>";
// echo $a += $b;
echo "<br>";
echo $a > $b;
echo "<br>";
echo $a == $b; //equality
echo $a <= $b; //True 2, 1, 0
echo "<br>";
echo $a >= $b; // 3, 4, 5
echo $a >= $a;
echo $a > $a;
echo $a <> $b;

$firstName = "John";
$lastName = "Doe";

$fullName = $firstName.$lastName;
 $firstName .= $lastName;
 echo $firstName;
echo "<br>";

// $a = 2;
// $b = 3;

if($a > $b || $b <= $a || $a == $a && $b <> $b){
    echo "A is less than B";
}else{
    echo "E no gree work";z
}




?>