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

public function Insertar() {
  $stmt = $this -> conexionBD -> prepare("INSERT INTO adm_usuarios (usuario,password,fechaHoraDeRegistro,nombre,apellido,email) VALUES (?,?,?,?,?,?)");
  $stmt -> bind_param("ssssss", $this -> usuario, $this -> password, $this -> fechaHoraDeRegistro, $this -> nombre, $this -> apellido, $this -> email);
  $stmt -> execute();
}


public function Listado() {
  
}






public function BuscarPorNombre($nombre) {

  $sql ="SELECT * FROM adm_usuarios WHERE nombre = ?";

  $stmt = $this -> conexionBD -> prepare($sql);
  $stmt -> bind_param("s", $nombre);
  $stmt -> execute();
  
  return $resultado = $stmt -> get_result() -> fetch_assoc();

}


public function BuscarPorUsuario($usuario) {

  $sql = "SELECT * FROM adm_usuarios WHERE usuario = ?";

  $stmt = $this ->conexionBD -> prepare($sql);
  $stmt -> bind_param("s", $usuario); 
  $stmt -> execute();

  return $resultado = $stmt -> get_result() -> fetch_assoc();

}





public function PasswordToHash($password){
  return password_hash($password,PASSWORD_DEFAULT);
}





}
