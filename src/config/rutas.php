<?php

use src\Controllers\LoginController;
use src\Controllers\UsuarioController;
use src\Router\Router;

require "../vendor/autoload.php";

Router::AddGet("/login", [LoginController::class, 'index']);

Router::AddGet("/usuario/alta", [UsuarioController::class, 'index']);



