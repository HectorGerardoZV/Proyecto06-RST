<?php

require __DIR__ . "/../model/dao/PropertyDao.php";
require __DIR__ . "/../model/class/Property.php";

use PropertyDao as PropertyDao;
use Property as Property;


class AdminController
{


    public static function admin(Router $router)
    {
        $propertyDao = new PropertyDao();
        $numProperties = sizeof($propertyDao->findAll());



        $router->render("admin/admin", [
            "numProperties" => $numProperties
        ]);
    }
}
