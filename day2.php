<?php
// //  define("RESUMPTION_DATE", "30th November 2024");
// //  echo RESUMPTION_DATE;


// //operators
// $r = 10;
// $a = 2;
// $b = 3;
// $c = 10;
// $d = 5;
// $areaOfCircle = pi() * $r ** 2;
// $areaOfCircle2 = 3.142 * $r * $r;

// $rslt = $a * $c + $b / $a * $d;

// echo $areaOfCircle;
// echo "<br>";
// echo $areaOfCircle2;
// echo "<br>";
// echo $rslt;
// echo "<br>";
// $rslt2 = $a + $b;
// echo $rslt2;
// echo "<br>";
// // echo $a += $b;
// echo "<br>";
// echo $a > $b;
// echo "<br>";
// echo $a == $b; //equality
// echo $a <= $b; //True 2, 1, 0
// echo "<br>";
// echo $a >= $b; // 3, 4, 5
// echo $a >= $a;
// echo $a > $a;
// echo $a <> $b;

// $firstName = "John";
// $lastName = "Doe";

// $fullName = $firstName.$lastName;
//  $firstName .= $lastName;
//  echo $firstName;
// echo "<br>";

// // $a = 2;
// // $b = 3;

// if($a > $b || $b <= $a || $a == $a && $b <> $b){
//     echo "A is less than B";
// }else{
//     echo "E no gree work";z
// }

// $msg = "I will do my assignment<br>";

// for($counter = 0; $counter <= 0; $counter++){
//     //code goes here
//     echo $counter.$msg;
// }

$nickNames = array(
    "Teasekid",
    "Vegas",
    "Asabe",
    "Ladidi",
    "Debby",
    "First lady",
    "MuyiFX",
    "Prof"
);
// echo count($nickNames);
for($i = 0; $i < count($nickNames); $i++){
    // echo $i.$nickNames[$i]."<br>";
}


$alphabets = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z" );
$alpha = 'A';

for($counter = 0; $counter < count($alphabets); $counter++){
    if($alphabets[$counter] == $alpha){
        echo $counter + 1;
    }
}
// $counter = 0;
// while($counter < 10){
// echo $msg;
// $counter++;
// }