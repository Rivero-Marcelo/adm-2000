<?php
namespace src\Router;
use src\Controllers\ViewController;


require "../vendor/autoload.php";


class Router {

public static $rutasGet = array();
public static $rutasPost = array();
public static $urlActual;
public static $metodoActual;



public static function AddGet($url, $funcion, $args){

   array_push(self::$rutasGet, [

        'url' => $url,
        'funcion' => $funcion,
        'args' => $args

    ]); 

}


public static function AddPost($url, $funcion){

    array_push(self::$rutasPost,[

        'url' => $url,
        'funcion'=> $funcion,

    ]);

}


public static function VerificarRuta(){

    self::$urlActual = $_SERVER['REQUEST_URI'];
    self::$metodoActual = $_SERVER['REQUEST_METHOD'];

    if(self::$metodoActual === 'GET'){

        foreach(self::$rutasGet as $ruta){

            if($ruta['url'] === self::$urlActual){

                return $ruta;

            }
   
        }
        return null;
    }

}

public static function Run(){

   $resultado = self::VerificarRuta();

   if($resultado){
    
    call_user_func_array($resultado['funcion'], $resultado['args']);

   }else{
    
    ViewController::NotFound();

    }

    
}



}