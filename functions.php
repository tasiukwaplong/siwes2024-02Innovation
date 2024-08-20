<?php

function goingToSchool(){
    echo "TO-DO: Going to school<br>";
    echo "Step 1: Wake up<br>";
    echo "Step 2: Pray<br>";
    echo "Step 3: Take your bath<br>";
    echo "Step 4: Eat food<br>";
    echo "Step 5: trek to school<br>";    
}

function winningElection(){
    echo "TO-DO: Winning election<br>";
    echo "Step 1: Buy form<br>";
    echo "Step 2: Declare interest<br>";
    echo "Step 3: Meet stakeholders<br>";
    echo "Step 4: Campaign<br>";
    echo "Step 5: Go to the polls<br>";
}

function add_numbers(){
    $num1 = 20;
    $num2 = 30;
    return $num1 + $num2;
}

function subtNumbers($num1, $num2){
    return $num1 - $num2;
}
// called the function
// winningElection();
// goingToSchool();
// echo add_numbers();
echo subtNumbers(10, 10);
echo subtNumbers(200, 0);
echo subtNumbers(20000, 20);
echo subtNumbers(390, 900);



// function createTodo(){
//     // add new to-do
//     array_push($_SESSION['todos'], $_POST['item']);
// }

// createTodo();
// $sunna = "Anjela";
// saveName($sunna);


function saveName($name){
    if(startsWithA($name)){
        echo "Cannot add name: $name because it starts with letter A";
    }else{
        echo "Added $name to storage";
        $_SESSION['names'] = $name;
    }
}


function startsWithA($name){
    $firstLetter = substr($name, 0, 1);
    
    if(strtoupper($firstLetter) == "A"){
        return true;
    }else{
        return false;
    }
}