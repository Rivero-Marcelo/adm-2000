<?php

use src\Controllers\LoginController;
use src\Controllers\UsuarioController;
use src\Controllers\ViewController;
use src\Router\Router;

require "../vendor/autoload.php";

Router::AddGet('/adm', [ViewController::class, 'Render'], ['HomeView', ['mensaje' => null]]);

Router::AddGet("/adm/login", [ViewController::class, 'Render'], ['LoginView']);

Router::AddGet("/adm/home", [ViewController::class, 'Render'], ['HomeView', ['mensaje' => 'En Construcción...']]);

Router::AddGet('/adm/usuario/alta', [ViewController::class, 'Render'], ['UsuarioView',  ['mensaje' => null]]);

Router::AddPost('/adm/usuario/alta', [UsuarioController::class, 'Alta'], [[]]);



