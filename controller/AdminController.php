<?php
//Daos
require __DIR__ . "/../model/dao/PropertyDao.php";
require __DIR__ . "/../model/dao/SallerDao.php";
//Classes
require __DIR__ . "/../model/class/Property.php";
require __DIR__ . "/../model/class/Saller.php";

//Daps
use PropertyDao as PropertyDao;
use SallerDao as SallerDao;
//Classes
use Property as Property;
use Saller as Saller;


class AdminController
{


    public static function admin(Router $router)
    {
        //Daos
        $propertyDao = new PropertyDao();
        $sallerDao = new SallerDao();
        //Asignation values


        $numProperties = sizeof($propertyDao->findAll());
        $numSallers = sizeof($sallerDao->findAll());

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            header("location: /logout");
        }

        $router->render("admin/admin", [
            "numProperties" => $numProperties,
            "numSallers" => $numSallers
        ]);
    }
}
