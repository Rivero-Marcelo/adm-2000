<?php
namespace src\Controllers;

use src\Models\UsuarioModel;

require "../vendor/autoload.php";


class SesionController {

  



    public static function InicioDeSesion() {

        $u = new UsuarioModel();
        $u -> usuario = $_POST['usuario'];
        $u -> password = $_POST['password'];
        
        if(self::VerificarCredenciales($u)){

            echo "logueado";

        }else{

            $args = ['mensaje' => SESSION_LOG_FAIL];

            ViewController::Render('LoginView', $args);
        }

    }

    
    private static function VerificarCredenciales(object $u) {

        $credenciales = $u -> BuscarPorUsuario($u -> usuario);
        
        if($credenciales){
      
          return self::ValidarPasswordHash($u -> password, $credenciales['password']);
      
        }else{
      
          return false;
      
        }
      
      
      }

      private static function ValidarPasswordHash($password, $passwordHash) {
        return password_verify($password, $passwordHash);
      }
      






}