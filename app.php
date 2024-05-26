<?php

require_once __DIR__ . "/model/TodoList.php";
require_once __DIR__ . "/Bussines_Logic/show_todolist.php";
require_once __DIR__ . "/Bussines_Logic/addTodoList.php";
require_once __DIR__ . "/Bussines_Logic/removeTodoList.php";
require_once __DIR__ . "/view/view_show_TodoList.php";
require_once __DIR__ . "/view/view_add_TodoList.php";
require_once __DIR__ . "/view/view_remove_TodoList.php";
require_once __DIR__ . "/helper/input.php";

echo "Aplikasi ToDoList" . PHP_EOL;

viewShowTodoList();