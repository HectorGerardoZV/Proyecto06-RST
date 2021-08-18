
<?php
//Daos
use PropertyDao as PropertyDao;
use Property as Property;
class PropertyController{


    public static function dashboard(Router $router){
        $propertyDao = new PropertyDao();
        $properties = $propertyDao->findAll();

        if($_SERVER["REQUEST_METHOD"]=="POST"){
         $idProperty =  $_POST["idProperty"];
         $propertyDao->delete($idProperty);
         header("location: /admin/admin/property?delete=true");
        }


        $router->render("admin/layout",[
            "titelPage" => "PropertyDashBoard",
            "style" => "/view//admin/properties//property-style.css",
            "page"=>"property",
            "properties" =>$properties
        ]);
    }
    public static function create(Router $router){
        echo "Desde Property Dash";
    }
    public static function update(Router $router){
        echo "Desde Property Dash";
    }
    public static function delete(Router $router){
        echo "Desde Property Dash";
    }

}

?>