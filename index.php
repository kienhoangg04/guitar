<?php 
session_start();
require './Core/Database.php';
require './helper/common.php';
require './Models/BaseModel.php';
require './Controllers/BaseController.php';

$controllerName = (isset($_REQUEST['controller']) ? ucfirst(strtolower($_REQUEST['controller'])) : 'Home') . 'Controller';
$actionName     = $_REQUEST['action'] ?? 'index';

require "./Controllers/${controllerName}.php";

$controllerObject = new $controllerName;
$controllerObject->$actionName();

?>