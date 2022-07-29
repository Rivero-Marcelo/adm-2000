<?php
use src\Router\Router;


require "../vendor/autoload.php";
require_once "../Util/DotEnv.php";

include "../config/rutas.php";



Router::Run();