<?php
namespace src\Controllers;

use src\Models\UsuarioModel;

require "../vendor/autoload.php";


class UsuarioController {


public static function index() {
    ViewController::render('UsuarioView');
  }



public function Alta(){

    $u = new UsuarioModel();
    $u -> usuario = "";
    $u -> password = "";
    $u -> nombre = "";
    $u -> apellido = "";
    $u -> email = "";
    $u -> fechaHoraDeRegistro = date("Y-m-d H:i:s");

  }


public function Baja() {


}

public function Modificar() {


}



}
