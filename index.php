<?php
// Check if the constant URL is not defined
if (!defined("URL")) {
    define("URL", "http://localhost/examen3/");
}

// Include the menuadmin.php file from the vistas/admin/ directory
require_once("View/admin/index.php");

// Include the contenido.php file from the controladores/ directory
require_once("Controllers/contenido.php");
?>

