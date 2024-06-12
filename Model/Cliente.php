<?php

Class Cliente {

    private $idcliente;
    private $nombres;
    private $apellidos;
    private $sexo;
    private $direccion;
    private $telefono;
    private $pais;
    private $clave;
    private $correo;


    public function __construct($idcliente="", $nombres="", $apellidos="", $sexo="",
    $direccion="", $telefono="", $pais="", $clave="", $correo=""){

        $this->$idcliente = $idcliente;
        $this->$nombres = $nombres;
        $this->$apellidos = $apellidos;
        $this->$sexo = $sexo;
        $this->$direccion = $direccion;
        $this->$telefono = $telefono;
        $this->$pais = $pais;
        $this->$clave = $clave;
        $this->$correo = 
    }



}

?>