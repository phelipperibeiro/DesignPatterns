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
use Code\Produto\ProdutoManager;
use Code\Produto\Tasks\CreateProductTask;
use Code\Produto\Tasks\UpdateProductTask;
use Code\Produto\Tasks\DeleteProductTask;


$Conn = new \PDO('mysql:host=10.10.1.240;dbname=movida_gtf', 'cpd', '');
$ProdutoDAO = new ProdutoDAO($Conn);
$Logger = new Logger();

$di = new Container;
$di->set('produto.manager', new ProdutoManager($ProdutoDAO, $Logger));


$taskManager = new TaskManager($di);
$taskManager->addTask(new CreateProductTask());
$taskManager->addTask(new UpdateProductTask());
$taskManager->addTask(new DeleteProductTask());
$taskManager->run();
