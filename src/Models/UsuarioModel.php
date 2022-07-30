<?php
namespace src\Models;
use src\Models\BdModel;
require "../vendor/autoload.php";


class UsuarioModel extends BdModel {

  public $id;
  public $usuario;
  public $password;
  public $fechaHoraDeRegistro;
  public $fechaUltimaSesion;
  public $horaUltimaSesion;
  public $nombre;
  public $apellido;
  public $email;




public function insertar() {



}



public function Listado() {


  
}




private function PasswordToHash($password ){
  return password_hash($password,PASSWORD_DEFAULT);
}




}
