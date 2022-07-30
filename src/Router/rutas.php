<?php

use src\Controllers\LoginController;
use src\Controllers\UsuarioController;
use src\Controllers\ViewController;
use src\Router\Router;

require "../vendor/autoload.php";

Router::AddGet('/adm', [ViewController::class, 'render'], ['HomeView', ['mensaje' => null]]);

Router::AddGet("/adm/login", [ViewController::class, 'render'], ['LoginView']);

Router::AddGet("/adm/home", [ViewController::class, 'render'], ['HomeView', ['mensaje' => 'En Construcción...']]);

Router::AddGet("/usuario/alta", [ViewController::class, 'render'], ['UsuarioView']);



