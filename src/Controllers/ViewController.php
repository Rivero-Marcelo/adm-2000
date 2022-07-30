<?php
namespace src\Controllers;



 class ViewController {

    public static function Render($view, $data=[]) {

       // ob_start();
        include dirname(__DIR__) . "/Views/$view.php";

        //$columna1 = ob_get_clean();

        //include dirname(__DIR__) . "/Views/$view.php";
        
        //$pagina = ob_get_clean();

        //echo "hola";

    }

    public static function NotFound() {

        header("HTTP/1.0 404 Not Found");
        include dirname(__DIR__) . "/Views/404.php";
        die();

    }


 }

