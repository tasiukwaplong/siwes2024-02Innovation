<?php
session_start();
// echo $_POST['item'];
// print_r($_SESSION['todos']);

function createTodo(){
    // add new to-do
    array_push($_SESSION['todos'], $_POST['item']);
}

createTodo();
?>