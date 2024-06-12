<?php

Class Contenido {


    public function Mostrar_archivo(){

        require_once("Conexion.php");


        $url = isset($_GET["url"]) ? $_GET["url"] : null;
        $url = explode("/", $url);
        $id = end($url);
        $pagina = "";


        if($url[0] == null){
            $pagina = "View/admin/index.php";
        }elseif($url[0] == "crud_clientes"){
            $pagina = "View/admin/contenido/crud_clientes.php";
        }
}
}

?>