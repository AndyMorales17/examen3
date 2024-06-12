<?php

Class Productos{
    
    private $idproducto;
    private $idcategoria;
    private $idproveedor;
    private $nombre_producto;
    private $precio_nom;
    private $ofertado;
    private $precio_oferta
    private $existencias;
    private $descripcion;
    private $imagen;

    public function __construct($idproducto, $idcategoria, $idproveedor, $nombre_producto, $precio_nom, $ofertado, $precio_oferta, $existencias, $descripcion, $imagen){
        $this->idproducto = $idproducto;
        $this->idcategoria = $idcategoria;
        $this->idproveedor = $idproveedor;
        $this->nombre_producto = $nombre_producto;
        $this->precio_nom = $precio_nom;
        $this->ofertado = $ofertado;
        $this->precio_oferta = $precio_oferta;
        $this->existencias = $existencias;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;

    }

    
    public function getIdProducto() {
        return $this->idproducto;
    }
    
    public function getIdCategoria() {
        return $this->idcategoria;
    }
    
    public function getIdProveedor() {
        return $this->idproveedor;
    }
    
    public function getNombreProducto() {
        return $this->nombre_producto;
    }
    
    public function getPrecioNom() {
        return $this->precio_nom;
    }
    
    public function getOfertado() {
        return $this->ofertado;
    }
    
    public function getPrecioOferta() {
        return $this->precio_oferta;
    }
    
    public function getExistencias() {
        return $this->existencias;
    }
    
    public function getDescripcion() {
        return $this->descripcion;
    }
    
    public function getImagen() {
        return $this->imagen;
    }




?>