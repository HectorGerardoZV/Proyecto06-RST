<?php

require __DIR__ . "/../model/dao/UserDao.php";
require __DIR__ . "/../model/class/User.php";

use UserDao as UserDao;
use User as User;


class LoginController
{


    public static function login(Router $router)
    {

        $userError = false;
        $userDao = new UserDao();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $result = new User($_POST);
            $user = $userDao->find($result);

            if ($user) {
                $user = new User($user);
                session_start();
                $_SESSION["userName"] = $user->getUserName();
                $_SESSION["login"] = true;
                header("location: admin/admin");
            } else {
                $userError = true;
            }
        }

        $login = $_SESSION["login"] ?? false;
        if ($login) {
            header("location: admin/admin");
        } else {
            $router->render("login/login", [
                "userError" => $userError ?? false
            ]);
        }
    }
    public static function logout()
    {
        session_start();
        $_SESSION = [];
        header("location: /login");
    }
}
