<?php

include_once './Code_old/Logger/Logger.php';
include_once './Code_old/Produto/Produto.php';
include_once './Code_old/Produto/ProdutoDAO.php';
include_once './Code_old/Produto/ProdutoManager.php';
include_once './Code_old/Task/TaskInterface.php';
include_once './Code_old/Task/TaskManager.php';
include_once './Code_old/Produto/Tasks/CreateProductTask.php';
include_once './Code_old/Produto/Tasks/UpdateProductTask.php';
include_once './Code_old/Produto/Tasks/DeleteProductTask.php';


use Code\Task\TaskManager;
use Code\Produto\Tasks\CreateProductTask;
use Code\Produto\Tasks\UpdateProductTask;
use Code\Produto\Tasks\DeleteProductTask;

$taskManager = new TaskManager();
$taskManager->addTask(new CreateProductTask());
$taskManager->addTask(new UpdateProductTask());
$taskManager->addTask(new DeleteProductTask());
$taskManager->run();
