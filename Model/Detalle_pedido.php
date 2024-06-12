<?php

Class Detalle_pedido {

    private $iddetalle;
    private $idpedido;
    private $idproducto;
    private $cantidad;
    private $subtotal;

    public function __construct($iddetalle, $idpedido, $idproducto, $cantidad, $subtotal) {
        $this->iddetalle = $iddetalle;
        $this->idpedido = $idpedido;
        $this->idproducto = $idproducto;
        $this->cantidad = $cantidad;
        $this->subtotal = $subtotal;
      }
    
      // getters
      public function getIddetalle() {
        return $this->iddetalle;
      }
    
      public function getIdpedido() {
        return $this->idpedido;
      }
    
      public function getIdproducto() {
        return $this->idproducto;
      }
    
      public function getCantidad() {
        return $this->cantidad;
      }
    
      public function getSubtotal() {
        return $this->subtotal;
      }
    
      // setters
      public function setIddetalle($iddetalle) {
        $this->iddetalle = $iddetalle;
      }
    
      public function setIdpedido($idpedido) {
        $this->idpedido = $idpedido;
      }
    
      public function setIdproducto($idproducto) {
        $this->idproducto = $idproducto;
      }
    
      public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
      }
    
      public function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
      }

}

?>