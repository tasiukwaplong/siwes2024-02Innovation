<?php
session_start();

// checking if form is submitted from frontend
if(isset($_POST['item'])){
    createTodo($_POST['item']);
}

// add new to-do
function createTodo($todo){    
    // checking if session already exists
    if(isset($_SESSION['todos'])){
        array_push($_SESSION['todos'], $_POST['item']); 
        echo "Todo added successfully. Click <a href='index.php'> here</a> to go back";
    }else{
        $_SESSION['todos'] = [$todo];
    }
}

function deleteTodo(){

}

function updateTodo(){

}


function readTodo(){
    // checking if session already exists
    if(isset($_SESSION['todos'])){
        return $_SESSION['todos'];
    }else{
        return [];
    } 
}