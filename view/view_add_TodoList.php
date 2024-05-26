<?php

require_once __DIR__ . "/../model/TodoList.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../Bussines_Logic/addTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}