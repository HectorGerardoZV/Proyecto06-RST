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
        $router->render("public/masterPage", [
            "titlePage" => "Home",
            "page" => "index",
            "properties" => $properties,
            "blogs" => $blogs
        ]);
    }
    public static function aboutUs(Router $router)
    {
        $router->render("public/masterPage", [
            "titlePage" => "About Us",
            "page" => "aboutUs"

        ]);
    }
    public static function properties(Router $router)
    {
        $propertyDao = new PropertyDao();
        $properties = $propertyDao->findAll();
        $router->render("public/masterPage", [
            "titlePage" => "Properties",
            "page" => "properties",
            "properties" => $properties

        ]);
    }
    public static function blogs(Router $router)
    {
        $blogDao = new BlogDao();
        $blogs = $blogDao->findAll();
        $router->render("public/masterPage", [
            "titlePage" => "Blogs",
            "page" => "blogs",
            "blogs"=>$blogs

        ]);
    }
    public static function contact(Router $router)
    {
        $router->render("public/masterPage", [
            "titlePage" => "Contact",
            "page" => "contact"

        ]);
    }
    public static function property(Router $router)
    {
        $propertyDao = new PropertyDao();
        $sallerDao = new SallerDao();
        $idProperty = intval($_GET["idProperty"]);
        $property = $propertyDao->find($idProperty);
        $saller = $sallerDao->find($property->getIdSaller());

        $router->render("public/masterPage", [
            "titlePage" => "Property",
            "page" => "property",
            "property" =>$property,
            "saller"=>$saller

        ]);
    }
    public static function blog(Router $router)
    {
        $blogDao = new BlogDao();
        $idBlog = intval($_GET["idBlog"]);
        $blog = $blogDao->find($idBlog);
        $router->render("public/masterPage", [
            "titlePage" => "Blog",
            "page" => "blog",
            "blog"=>$blog

        ]);
    }
}
