<?php
namespace src\Controllers;

require "../vendor/autoload.php";


class LoginController{



public static function index(){

    ViewController::render('LoginView');

}







private function PasswordToHash($password){
    return password_hash($password,PASSWORD_DEFAULT);
}





}