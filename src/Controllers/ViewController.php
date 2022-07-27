<?php
namespace src\Controllers;



 class ViewController {



    public static function render($view, $data=[]) {

        include dirname(__DIR__) . "/Views/$view.php";

    }



    public static function NotFound() {

        header("HTTP/1.0 404 Not Found");
        include dirname(__DIR__) . "/Views/404.php";
        die();

    }


 }

