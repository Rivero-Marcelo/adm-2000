<?php
namespace src\Models;

use mysqli_sql_exception;

require "../vendor/autoload.php";



class BdModel {

      public $HostDB;
      public $NombreBD;
      public $UsuarioBD;
      public $PasswordBD;
      public $conexionBD;

      public function __construct(){

          $this -> inicializarParametrosDeConexion();

        try{

          $this -> conexionBD = new \mysqli(
            $this -> HostDB,
            $this-> UsuarioBD,
            $this-> PasswordBD,
            $this-> NombreBD

          );

        }catch(mysqli_sql_exception $e){



        }
        
          
      
      
      
      
        }


      private function inicializarParametrosDeConexion(){
          $this -> HostDB = $_ENV['DB_HOST'];
          $this -> NombreBD = $_ENV['DB_NAME'];
          $this -> UsuarioBD = $_ENV['DB_USER'];
          $this -> PasswordBD = $_ENV['DB_PASSWORD'];
      }







}
