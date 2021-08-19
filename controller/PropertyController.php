
<?php
//Daos
use PropertyDao as PropertyDao;
use SallerDao as SallerDao;
use Property as Property;
use Saller as Saller;

class PropertyController
{


    public static function dashboard(Router $router)
    {
        $propertyDao = new PropertyDao();
        $properties = $propertyDao->findAll();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idProperty =  $_POST["idProperty"];
            $propertyDao->delete($idProperty);
            header("location: /admin/admin/property?delete=true");
        }


        $router->render("admin/layout", [
            "titelPage" => "PropertyDashBoard",
            "style" => "/view//admin/properties//property-style.css",
            "page" => "property",
            "action" => "dashboard",
            "properties" => $properties
        ]);
    }
    public static function create(Router $router)
    {
        $propertyDao = new PropertyDao();
        $sallerDao = new SallerDao();
        $errors = [];
        $sallers = $sallerDao->findAll();
        $property =  new Property();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = $_POST;
            $data["image"] = $_FILES["image"]["name"];
            //Validate inputs
            if ($data["title"] == "") {
                $errors["titleError"] = "Error: Complete the porperty title";
            } else if (strlen($data["title"]) < 3) {
                $errors["titleError"] = "Error: Property title must be more than 3 characters";
            } else if (strlen($data["title"]) > 20) {
                $errors["titleError"] = "Error: Property title must be less than 20 characters ";
            }
            if ($data["price"] == "") {
                $errors["priceError"] = "Error: Add a house price";
            }
            if ($data["image"] == "") {
                $errors["imageError"] = "Error: Select an image";
            }
            if ($data["description"] == "") {
                $errors["descriptionError"] = "Error: Complete the property description";
            } else if (strlen($data["description"]) < 50) {
                $errors["descriptionError"] = "Error: Property description must be more than 50 characters";
            }
            if ($data["parking"] == "") {
                $errors["parkingError"] = "Error: Complete";
            }
            if ($data["rooms"] == "") {
                $errors["roomsError"] = "Error: Complete";
            }
            if ($data["bethrooms"] == "") {
                $errors["bethRoomsError"] = "Error: Complete";
            }
            if ($data["stars"] == "") {
                $errors["starsError"] = "Error: Complete";
            }
            if (!array_key_exists("idSaller", $data)) {
                $errors["idSaller"] = "Error: Select a saller";
            }
            $property->setData($data);
            if (empty($errors)) {
                //Creating Property
                $property = new Property($_POST);
                //Saving the image
                $image = $_FILES["image"];
                $extensionImage = explode(".", $image["name"])[1];
                $imageName = md5(uniqid(rand(), true)) . "." . $extensionImage;
                move_uploaded_file($image["tmp_name"], "view/img/data/properties/" . $imageName);
                $property->setImage($imageName);
                //Addig property
                $result = $propertyDao->create($property);
                if($result){
                    header("location: /admin/admin/property/create?creation=true");
                }
            }
        }



        $router->render("admin/layout", [
            "titelPage" => "Property-Creation",
            "style" => "/view//admin/properties//property-style.css",
            "page" => "property",
            "action" => "create",
            "crudAction" => "Creating Property",
            "errors" => $errors,
            "sallers" => $sallers,
            "property" => $property

        ]);
    }
    public static function update(Router $router)
    {
        echo "Desde Property Dash";
    }
    public static function delete(Router $router)
    {
        echo "Desde Property Dash";
    }
}

?>