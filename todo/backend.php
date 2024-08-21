<?php
session_start();

// checking if form is submitted from frontend
if(isset($_POST['item'])){
    createTodo($_POST['item']);
}

if(isset($_POST['item-content'])){
    updateTodo($_POST['item-content'], $_POST['item-index']);
}

// // when one attempts to content
// if(isset($_GET['indx'])){
//     readTodo($_GET['indx']);
// }

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

// edit the content of the todo
function updateTodo($updatedContent, $todoIndex){
    echo "Todo item editted successfully. Click <a href='index.php'> here</a> to go back";
    return $_SESSION['todos'][$todoIndex] = $updatedContent;

}


function readTodos(){
    // checking if session already exists
    if(isset($_SESSION['todos'])){
        return $_SESSION['todos'];
    }else{
        return [];
    } 
}

//fetching todo item using their index
function readTodo($indx){
    if(isset($_SESSION['todos'][$indx])){
        return [$_SESSION['todos'][$indx], $indx];
    }
}