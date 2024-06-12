<?php
// Check if the constant URL is not defined
if (!defined("URL")) {
    define("URL", "http://localhost/examen3/");
}

require_once("Controllers/Conexion.php");
require_once("Controllers/contenido.php");


require_once("Model/Cliente.php");




require_once("View/admin/index.php");




?>

