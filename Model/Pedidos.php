<?php

Class Pedidos {

    private $idpedido;
    private $idcliente;
    private $fecha;
    private $total;
    private $estado;

    public function __construct($idpedido, $idcliente, $fecha, $total, $estado) {
        $this->idpedido = $idpedido;
        $this->idcliente = $idcliente;
        $this->fecha = $fecha;
        $this->total = $total;
        $this->estado = $estado;
      }
    
      // getters
      public function getIdpedido() {
        return $this->idpedido;
      }
    
      public function getIdcliente() {
        return $this->idcliente;
      }
    
      public function getFecha() {
        return $this->fecha;
      }
    
      public function getTotal() {
        return $this->total;
      }
    
      public function getEstado() {
        return $this->estado;
      }
    
      // setters
      public function setIdpedido($idpedido) {
        $this->idpedido = $idpedido;
      }
    
      public function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
      }
    
      public function setFecha($fecha) {
        $this->fecha = $fecha;
      }
    
      public function setTotal($total) {
        $this->total = $total;
      }
    
      public function setEstado($estado) {
        $this->estado = $estado;
      }



}

?>