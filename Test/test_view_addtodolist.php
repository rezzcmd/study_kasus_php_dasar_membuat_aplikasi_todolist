<?php

require_once "../view/view_add_TodoList.php";
require_once "../Bussines_Logic/addTodoList.php";
require_once "../Bussines_Logic/show_todolist.php";

addTodoList("Muhamad");
addTodoList("Ridwan");
addTodoList("Arifin");

viewAddTodoList();

showTodoList();
