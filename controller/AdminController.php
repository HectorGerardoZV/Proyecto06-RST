<?php
//Daos
require __DIR__ . "/../model/dao/PropertyDao.php";
require __DIR__ . "/../model/dao/SallerDao.php";
require __DIR__ . "/../model/dao/BlogDao.php";
//Classes
require __DIR__ . "/../model/class/Property.php";
require __DIR__ . "/../model/class/Saller.php";
require __DIR__ . "/../model/class/Blog.php";

//Daps
use PropertyDao as PropertyDao;
use SallerDao as SallerDao;
use BlogDao as BlogDao;
//Classes
use Property as Property;
use Saller as Saller;
use Blog as Blog;


class AdminController
{


    public static function admin(Router $router)
    { 
        //Daos
        $propertyDao = new PropertyDao();
        $sallerDao = new SallerDao();
        $blogDao = new BlogDao();
        //Asignation values

        $numProperties = sizeof($propertyDao->findAll());
        $numSallers = sizeof($sallerDao->findAll());
        $numBlogs = sizeof($blogDao->findAll());

       
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            header("location: /logout");
        }

        $router->render("admin/admin", [
            "numProperties" => $numProperties,
            "numSallers" => $numSallers,
            "numBlogs" => $numBlogs
        ]);
    }
}
