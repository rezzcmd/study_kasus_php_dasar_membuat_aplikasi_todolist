<?php

require_once "../model/TodoList.php";
require_once "../Bussines_Logic/addTodoList.php";
require_once "../Bussines_Logic/show_todolist.php";
require_once "../Bussines_Logic/RemoveTodoList.php";


addTodoList("Muhamad");
addTodoList("Ridwan");
addTodoList("Arifin");
addTodoList("Rian");
addTodoList("Brayen");

showTodoList();

removeTodoList(3);

showTodoList();

// $succes = removeTodoList(5);
// var_dump($succes);

// showTodoList();

