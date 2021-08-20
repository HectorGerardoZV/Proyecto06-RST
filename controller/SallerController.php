<?php

use SallerDao as SallerDao;
use Saller as Saller;


class SalerController
{


    public static function dashboard(Router $router)
    {
        $sallerDao = new SallerDao();
        $pattern = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pattern = $_POST["pattern"];
        }
        $sallers = $sallerDao->findLike($pattern);


        $router->render("admin/layout", [
            "titelPage" => "SallerDashBoard",
            "style" => "/view//admin/sallers/saller-style.css",
            "page" => "saller",
            "action" => "dashboard",
            "sallers" => $sallers
        ]);
    }
    public static function create(Router $router)
    {
        $sallerDao = new SallerDao();
        $saller = new Saller();
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = $_POST;
            $data["image"] = $_FILES["image"]["name"];

            if ($data["name"] == "") {
                $errors["nameError"] = "Error: Please Complete the name";
            }
            if ($data["lastName"] == "") {
                $errors["lastNameError"] = "Error: Please Complete the last name";
            }
            if ($data["email"] == "") {
                $errors["emailError"] = "Error: Please Complete the E-Mail";
            }
            if ($data["phoneNumber"] == "") {
                $errors["phoneNumberError"] = "Error: Please Complete the phone number";
            }
            if (strlen($data["phoneNumber"]) != 10) {
                $errors["phoneNumberError"] = "Error: The Phone Number must be less or equal than 10 characters";
            }
            if ($data["image"] == "") {
                $errors["imageError"] = "Please select an image";
            }
            $saller->setData($data);

            if (empty($errors)) {
                //Saving the image
                $image = $_FILES["image"];
                $extensionImage = explode(".", $image["name"])[1];
                $imageName = md5(uniqid(rand(), true)) . "." . $extensionImage;
                move_uploaded_file($image["tmp_name"], "view/img/data/sallers/" . $imageName);
                $saller->setImage($imageName);
                //Addig property
                $result = $sallerDao->create($saller);
                if ($result) {
                    header("location: /admin/admin/saller/create?creation=true");
                }
            }
        }


        $router->render("admin/layout", [
            "titelPage" => "Saller-Creation",
            "style" => "/view//admin/sallers/saller-style.css",
            "page" => "saller",
            "action" => "create",
            "crudAction" => "Creating Saller",
            "errors" => $errors,
            "saller" => $saller
        ]);
    }
    public static function update(Router $router)
    {
        $idSaller = intval($_GET["idSaller"]);
        $sallerDao = new SallerDao();
        $saller = $sallerDao->find($idSaller);
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = $_POST;
            $data["image"] = $_FILES["image"]["name"];

            if ($data["name"] == "") {
                $errors["nameError"] = "Error: Please Complete the name";
            }
            if ($data["lastName"] == "") {
                $errors["lastNameError"] = "Error: Please Complete the last name";
            }
            if ($data["email"] == "") {
                $errors["emailError"] = "Error: Please Complete the E-Mail";
            }
            if ($data["phoneNumber"] == "") {
                $errors["phoneNumberError"] = "Error: Please Complete the phone number";
            }
            if (strlen($data["phoneNumber"]) != 10) {
                $errors["phoneNumberError"] = "Error: The Phone Number must be less or equal than 10 characters";
            }
            if (empty($errors)) {
                if ($data["image"] == "") {
                    $image = $saller->getImage();
                    $saller->setData($data);
                    $saller->setImage($image);
                } else {
                    //Get Image
                    $image = $_FILES["image"];
                    //Get Extension Image
                    $extensionImage = explode(".", $image["name"])[1];
                    //Generete new image name
                    $imageName = md5(uniqid(rand(), true)) . "." . $extensionImage;
                    //Saving new image
                    move_uploaded_file($image["tmp_name"], "view/img/data/sallers/" . $imageName);
                    //Deleting last imge
                    unlink("view/img/data/sallers/" . $saller->getImage());
                    $saller->setImage($imageName);
                }
                $result = $sallerDao->update($saller);
                if ($result) {
                    header("location: /admin/admin/saller/update?idSaller=$idSaller&update=true");
                }
            } else {
                $image = $saller->getImage();
                $saller->setData($data);
                $saller->setImage($image);
            }
        }
        $router->render("admin/layout", [
            "titelPage" => "Saller-Updating",
            "style" => "/view//admin/sallers/saller-style.css",
            "page" => "saller",
            "action" => "update",
            "crudAction" => "Updating Saller",
            "errors" => $errors,
            "saller" => $saller
        ]);
    }
    public static function delete()
    {
        $sallerDao = new SallerDao();
        $idSaller = intval($_GET["idSaller"]);
        $saller = $sallerDao->find($idSaller);
        unlink("view/img/data/sallers/" . $saller->getImage());
        header("location: /admin/admin/saller?delete=true");
    }
}
