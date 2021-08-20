
<?php

require "Router.php";
require "controller/LoginController.php";
require "controller/AdminController.php";
require "controller/PropertyController.php";
require "controller/SallerController.php";

use Router as Router;
use LoginController as LoginController;
use AdminController as AdminController;
use PropertyController as PropertyController;
use SalerController as SalerController;


$router = new Router();

//Login URL
$router->addGET("/login", [LoginController::class, "login"]);
$router->addPOST("/login", [LoginController::class, "login"]);
$router->addGET("/logout", [LoginController::class, "logout"]);
$router->addPOST("/logout", [LoginController::class, "logout"]);
//Admin URL
$router->addGET("/admin/admin", [AdminController::class, "admin"]);
$router->addPOST("/admin/admin", [AdminController::class, "admin"]);
//Admin CURD URL
//--Admin/Property--//
$router->addGET("/admin/admin/property", [PropertyController::class, "dashboard"]);
$router->addPOST("/admin/admin/property", [PropertyController::class, "dashboard"]);
$router->addGET("/admin/admin/property/create", [PropertyController::class, "create"]);
$router->addPOST("/admin/admin/property/create", [PropertyController::class, "create"]);
$router->addGET("/admin/admin/property/update", [PropertyController::class, "update"]);
$router->addPOST("/admin/admin/property/update", [PropertyController::class, "update"]);
$router->addGET("/admin/admin/property/delete", [PropertyController::class, "delete"]);
$router->addPOST("/admin/admin/property/delete", [PropertyController::class, "delete"]);
//--Admin/Saller--//
$router->addGET("/admin/admin/saller", [SalerController::class, "dashboard"]);
$router->addPOST("/admin/admin/saller", [SalerController::class, "dashboard"]);
$router->addGET("/admin/admin/saller/create", [SalerController::class, "create"]);
$router->addPOST("/admin/admin/saller/create", [SalerController::class, "create"]);
$router->addGET("/admin/admin/saller/update", [SalerController::class, "update"]);
$router->addPOST("/admin/admin/saller/update", [SalerController::class, "update"]);
$router->addGET("/admin/admin/saller/delete", [SalerController::class, "delete"]);
$router->addPOST("/admin/admin/saller/delete", [SalerController::class, "delete"]);

$router->run();


?>