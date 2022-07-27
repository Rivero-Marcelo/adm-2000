<?php
use src\Controllers\LoginController;

require "../vendor/autoload.php";

require_once "../Util/DotEnv.php";

include "../config/config.php"; 



echo "<br>";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $_ENV['TITULO_INDEX']  ?> </title>
</head>
<body>

<?php

$l = new LoginController();
$l->index();

echo "<br>";

$db = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);

echo "<pre>";
echo $db->client_info; 
echo "<br>";
//var_dump($dotenv);

echo "</pre>";

echo "<br>";

 // phpinfo(); 

 echo "<br>";

echo __DIR__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __CLASS__;
echo "<br>";
echo __NAMESPACE__;
echo "<br>";
echo __TRAIT__;
echo "<br>";
echo __FUNCTION__;
echo "<br>";
var_dump(dirname(__DIR__));
echo "<br>";
var_dump(basename(__FILE__));
echo "<br>";
var_dump(basename(__DIR__));
echo "<br>";
var_dump(pathinfo(__FILE__));
echo "<br>";
var_dump(realpath(__FILE__));
echo "<br>";
var_dump(file_exists(__FILE__));


 ?>
 </body>
</html>
