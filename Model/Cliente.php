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
        $this->$correo = $correo;
    }

         // getters
  public function getIdcliente() {
    return $this->idcliente;
  }

  public function getNombres() {
    return $this->nombres;
  }

  public function getApellidos() {
    return $this->apellidos;
  }

  public function getSexo() {
    return $this->sexo;
  }

  public function getDireccion() {
    return $this->direccion;
  }

  public function getTelefono() {
    return $this->telefono;
  }

  public function getPais() {
    return $this->pais;
  }

  public function getClave() {
    return $this->clave;
  }

  public function getCorreo() {
    return $this->correo;
  }

  // setters
  public function setIdcliente($idcliente) {
    $this->idcliente = $idcliente;
  }

  public function setNombres($nombres) {
    $this->nombres = $nombres;
  }

  public function setApellidos($apellidos) {
    $this->apellidos = $apellidos;
  }

  public function setSexo($sexo) {
    $this->sexo = $sexo;
  }

  public function setDireccion($direccion) {
    $this->direccion = $direccion;
  }

  public function setTelefono($telefono) {
    $this->telefono = $telefono;
  }

  public function setPais($pais) {
    $this->pais = $pais;
  }

  public function setClave($clave) {
    $this->clave = $clave;
  }

  public function setCorreo($correo) {
    $this->correo = $correo;
  }









}

?>