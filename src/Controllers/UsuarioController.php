<?php
namespace src\Controllers;

use Exception;
use mysqli_sql_exception;
use src\Models\UsuarioModel;
use src\Controllers\ViewController;

require "../vendor/autoload.php";


class UsuarioController {

public function __construct() {
  
  $v = new ViewController();

}



public static function Alta(){

    $u = new UsuarioModel();

    $u -> usuario = $_POST['usuario'];
    $u -> password = $u -> PasswordToHash($_POST['pass']);
    $u -> nombre = $_POST['nombre'];
    $u -> apellido = $_POST['apellido'];
    $u -> email = $_POST['email'];
    $u -> fechaHoraDeRegistro = date("Y-m-d H:i:s");

try{
      $u -> Insertar();  

} catch(mysqli_sql_exception $e){
  
  echo "<pre>"; 
 // var_dump($e);
  echo "</pre>";
 echo $e -> getCode();
 echo "<br>";
 echo $e -> getMessage();

}


  }


public function Baja() {


}









}
