<?php


if(file_exists(dirname(__DIR__) . "/app.env")){

    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__), 'app.env');
    $dotenv->load();

}else{

    echo "<b>";
    echo "Error al cargar entorno de apliación...";
    echo "</b>";
    exit();

}
