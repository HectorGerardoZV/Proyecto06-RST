<?php

use PropertyDao as PropertyDao;
use BlogDao as BlogDao;

class PublicController{

    public static function index(Router $router){
        $propertyDao = new PropertyDao();
        $blogDao = new BlogDao();
        $properties = $propertyDao->findAll();
        $blogs = $blogDao->findAll();
        $router->render("public/masterPage",[
            "page"=>"index",
            "properties" => $properties,
            "blogs"=>$blogs
        ]);
    }
    public static function aboutUs(Router $router){
        echo "Desde about";
    }
    public static function properties(Router $router){
        echo "Desde properties";
    }
    public static function blogs(Router $router){
        echo "Desde blogs";
    }
    public static function contact(Router $router){
        echo "Desde contact";
    }


}
