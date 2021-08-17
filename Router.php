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
      
        $urlActual = $_SERVER["PATH_INFO"] ?? "/";
        $metodo = $_SERVER["REQUEST_METHOD"];

        if ($metodo === "GET") {
            $funcion  = $this->GET[$urlActual] ?? null;
        } else if ($metodo === "POST") {
            $funcion  = $this->POST[$urlActual] ?? null;
        }
        if ($funcion) {
            call_user_func($funcion, $this);
        } else {
            echo "ERROR 404";
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
