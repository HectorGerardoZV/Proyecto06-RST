
<?php

require "Router.php";
require "controller/LoginController.php";
require "controller/AdminController.php";
require "controller/PropertyController.php";
require "controller/SallerController.php";
require "controller/BlogController.php";
require "controller/PublicController.php";

use Router as Router;
use LoginController as LoginController;
use AdminController as AdminController;
use PropertyController as PropertyController;
use SalerController as SalerController;
use BlogController as BlogController;
use PublicController as PublicController;


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
//--Admin/Blog--//
$router->addGET("/admin/admin/blog", [BlogController::class, "dashboard"]);
$router->addPOST("/admin/admin/blog", [BlogController::class, "dashboard"]);
$router->addGET("/admin/admin/blog/create", [BlogController::class, "create"]);
$router->addPOST("/admin/admin/blog/create", [BlogController::class, "create"]);
$router->addGET("/admin/admin/blog/update", [BlogController::class, "update"]);
$router->addPOST("/admin/admin/blog/update", [BlogController::class, "update"]);
$router->addGET("/admin/admin/blog/delete", [BlogController::class, "delete"]);
$router->addPOST("/admin/admin/blog/delete", [BlogController::class, "delete"]);

//Public URL's
$router->addGET("/", [PublicController::class, "index"]);
$router->addGET("/aboutUs", [PublicController::class, "aboutUs"]);
$router->addGET("/properties", [PublicController::class, "properties"]);
$router->addGET("/blogs", [PublicController::class, "blogs"]);
$router->addGET("/contact", [PublicController::class, "contact"]);
$router->addPOST("/contact", [PublicController::class, "contact"]);
//--Public pages gest--//
$router->addGET("/property", [PublicController::class, "property"]);
$router->addGET("/blog", [PublicController::class, "blog"]);



$router->run();


?>