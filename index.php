
<?php

require "Router.php";
require "controller/LoginController.php";
require "controller/AdminController.php";

use Router as Router;
use LoginController as LoginController;
use AdminController as AdminController;

$router = new Router();


$router->addGET("/login",[LoginController::class, "login"]);
$router->addPOST("/login",[LoginController::class, "login"]);
$router->addGET("/logout",[LoginController::class, "logout"]);
$router->addPOST("/logout",[LoginController::class, "logout"]);
$router->addGET("/admin/admin",[AdminController::class, "admin"]);
$router->addPOST("/admin/admin",[AdminController::class, "admin"]);

$router->run();


?>