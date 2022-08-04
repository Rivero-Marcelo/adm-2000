<?php
use src\Router\Router;
require "../vendor/autoload.php";
require_once "../Util/DotEnv.php";

include "../config/config.php";
include "../Router/rutas.php";



$s = session_status();
phpinfo();

Router::Run();