<?php

require_once "../model/TodoList.php";
require_once "../view/view_remove_TodoList.php";
require_once "../Bussines_Logic/addTodoList.php";
require_once "../Bussines_Logic/show_todolist.php";

addTodoList("Muhamad");
addTodoList("Ridwan");
addTodoList("Arifin");
addTodoList("budi");
addTodoList("rahmat");
addTodoList("koko");

showTodoList();
viewRemoveTodoList();
showTodoList();

