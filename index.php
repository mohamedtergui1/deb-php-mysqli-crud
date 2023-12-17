<?php 

require_once 'autoloader/Autoloader.php';
require_once 'controller/UserController.php';
Autoloader::autoload();
if (isset($_POST["submit"])){
    UserController::userCreate();
}
 else  if (isset($_GET['action'])){  
    $x=$_GET['action'];            
     switch ($x)
     {
      case 'listusers': UserController::showUser(); break;
      case 'create'   : UserController::pageCreateUser(); break;
      case 'read'     : UserController::readUser(); break;
     }
  }else
  {
    UserController::showUser();
  }