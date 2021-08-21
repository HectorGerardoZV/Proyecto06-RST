<?php

use PropertyDao as PropertyDao;
use BlogDao as BlogDao;
use SallerDao as SallerDao;

class PublicController
{

    public static function index(Router $router)
    {
        $propertyDao = new PropertyDao();
        $blogDao = new BlogDao();
        $properties = $propertyDao->findMany(3);
        $blogs = $blogDao->findMany(4);

        $login = $_SESSION["login"]??false;
        $router->render("public/masterPage", [
            "titlePage" => "Home",
            "page" => "index",
            "properties" => $properties,
            "blogs" => $blogs,
            "login" => $login
        ]);
    }
    public static function aboutUs(Router $router)
    {
        $login = $_SESSION["login"]??false;
        $router->render("public/masterPage", [
            "titlePage" => "About Us",
            "page" => "aboutUs",
            "login"=>$login

        ]);
    }
    public static function properties(Router $router)
    {
        $propertyDao = new PropertyDao();
        $properties = $propertyDao->findAll();
        $login = $_SESSION["login"]??false;
        $router->render("public/masterPage", [
            "titlePage" => "Properties",
            "page" => "properties",
            "properties" => $properties,
            "login"=>$login

        ]);
    }
    public static function blogs(Router $router)
    {
        $blogDao = new BlogDao();
        $blogs = $blogDao->findAll();
        $login = $_SESSION["login"]??false;
        $router->render("public/masterPage", [
            "titlePage" => "Blogs",
            "page" => "blogs",
            "blogs"=>$blogs,
            "login"=>$login

        ]);
    }
    public static function contact(Router $router)
    {
        $login = $_SESSION["login"]??false;
        $router->render("public/masterPage", [
            "titlePage" => "Contact",
            "page" => "contact",
            "login"=>$login

        ]);
    }
    public static function property(Router $router)
    {
        $propertyDao = new PropertyDao();
        $sallerDao = new SallerDao();
        $idProperty = intval($_GET["idProperty"]);
        $property = $propertyDao->find($idProperty);
        $saller = $sallerDao->find($property->getIdSaller());

        $login = $_SESSION["login"]??false;
        $router->render("public/masterPage", [
            "titlePage" => "Property",
            "page" => "property",
            "property" =>$property,
            "saller"=>$saller,
            "login"=>$login

        ]);
    }
    public static function blog(Router $router)
    {
        $blogDao = new BlogDao();
        $idBlog = intval($_GET["idBlog"]);
        $blog = $blogDao->find($idBlog);

        $login = $_SESSION["login"]??false;
        $router->render("public/masterPage", [
            "titlePage" => "Blog",
            "page" => "blog",
            "blog"=>$blog,
            "login"=>$login

        ]);
    }
    public static function error(Router $router){
        $router->render("error",[]);
    }
}
