<?php

require_once __DIR__ . "/../model/TodoList.php";
require_once __DIR__ . "/../Bussines_Logic/show_todolist.php";
require_once __DIR__ . "/../view/view_add_TodoList.php";
require_once __DIR__ . "/../view/view_remove_TodoList.php";
require_once __DIR__ . "/../helper/input.php";

function viewShowTodoList()
{
  
  while (true) {
    showTodoList();

    echo "Menu" . PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. keluar" . PHP_EOL;

    $pilihan = input("pilih");

    if($pilihan == "1"){
        viewAddTodoList();
    } elseif ($pilihan == "2") {
        viewRemoveTodoList();
    } elseif ($pilihan == "x") {
        break;
    } else {
        echo "Pilihan tidak dimengerti" . PHP_EOL;
    }
  }

  echo "Sampai Jumpa Lagi" . PHP_EOL;
    
}