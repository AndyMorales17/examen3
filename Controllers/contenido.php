<?php

Class contenido
{

    public function mostra_archivo()
    {
        require_once("Conexion.php");


        $url = isset($_GET["url"]) ? $_GET["url"] : null;
        $url = explode("/", $url);
        $id = end($url);
        $pagina = "";
        
        if($url[0]==null){
            $pagina="vistas/inicio.php";}
        elseif ($url[0] == "crud_clientes") { 
                $pagina = "View/admini/menuadmin.php";
        }elseif ($url[0] == "inicio") {
            $pagina = "vistas/inicio.php";
        }elseif ($url[0] == "categoria") {
            $pagina = "vistas/administrador/categoria.php";
        }elseif ($url[0] == "nosotros") {
            $pagina = "vistas/administrador/nosotros.php";
        }elseif ($url[0] == "contactos") {
            $pagina = "vistas/administrador/contactos.php";
        }

    }
}

?>