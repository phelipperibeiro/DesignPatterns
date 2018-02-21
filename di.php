<?php

include_once './Code/Logger/Logger.php';
include_once './Code/Produto/Produto.php';
include_once './Code/Produto/ProdutoDAO.php';
include_once './Code/Produto/ProdutoManager.php';
include_once './Code/Task/TaskInterface.php';
include_once './Code/Task/TaskManager.php';
include_once './Code/Produto/Tasks/CreateProductTask.php';
include_once './Code/Produto/Tasks/UpdateProductTask.php';
include_once './Code/Produto/Tasks/DeleteProductTask.php';


use Code\Task\TaskManager;
use Code\Produto\Tasks\CreateProductTask;
use Code\Produto\Tasks\UpdateProductTask;
use Code\Produto\Tasks\DeleteProductTask;

$taskManager = new TaskManager();
$taskManager->addTask(new CreateProductTask());
$taskManager->addTask(new UpdateProductTask());
$taskManager->addTask(new DeleteProductTask());
$taskManager->run();
