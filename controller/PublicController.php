<?php

use PropertyDao as PropertyDao;
use BlogDao as BlogDao;

class PublicController
{

    public static function index(Router $router)
    {
        $propertyDao = new PropertyDao();
        $blogDao = new BlogDao();
        $properties = $propertyDao->findMany(6);
        $blogs = $blogDao->findMany(3);
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
        $router->render("public/masterPage", [
            "titlePage" => "Properties",
            "page" => "properties"

        ]);
    }
    public static function blogs(Router $router)
    {
        $router->render("public/masterPage", [
            "titlePage" => "Blogs",
            "page" => "blogs"

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
        $router->render("public/masterPage", [
            "titlePage" => "Property",
            "page" => "property"

        ]);
    }
    public static function blog(Router $router)
    {
        $router->render("public/masterPage", [
            "titlePage" => "Blog",
            "page" => "blog"

        ]);
    }
}
