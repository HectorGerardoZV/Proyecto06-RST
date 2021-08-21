<?php

class Router{

    public $GET = [];
    public $POST = [];


    public function addGET($url, $funcion)
    {
        $this->GET[$url] = $funcion;
    }
    public function addPOST($url, $funcion)
    {
        $this->POST[$url] = $funcion;
    }


    public function run(){
      
      
        session_start();
        $login = $_SESSION["login"]??false;
        $urlProtected = [
            "/logout",
            "/admin/admin",
            "/admin/admin/property",
            "/admin/admin/property/create",
            "/admin/admin/property/update",
            "/admin/admin/property/delete",
            "/admin/admin/saller",
            "/admin/admin/saller/create",
            "/admin/admin/saller/update",
            "/admin/admin/saller/delete",
            "/admin/admin/blog",
            "/admin/admin/blog/create",
            "/admin/admin/blog/update",
            "/admin/admin/blog/delete"
        ];
        $urlActual = $_SERVER["PATH_INFO"] ?? "/";
        $metodo = $_SERVER["REQUEST_METHOD"];

        if ($metodo === "GET") {
            $funcion  = $this->GET[$urlActual] ?? null;
        } else if ($metodo === "POST") {
            $funcion  = $this->POST[$urlActual] ?? null;
        }

        if(in_array($urlActual,$urlProtected) && !$login){
            header("location: /");
        }

        if ($funcion) {

            call_user_func($funcion, $this);
        } else {
            header("location: /error");
        }
    }
    public function render($view, $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }


        ob_start();
        $contenido = ob_get_clean();
        include __DIR__ . "/view/".$view.".php";
    }

}
