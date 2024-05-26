<?php

require_once "../model/TodoList.php";
require_once "../Bussines_Logic/addTodoList.php";


addTodoList("Muhamad");
addTodoList("Ridwan");
addTodoList("Arifin");

var_dump($todoList);