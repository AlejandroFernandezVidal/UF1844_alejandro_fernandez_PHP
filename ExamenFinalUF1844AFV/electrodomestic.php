<?php

Class Electrodomestic {

    //Atributs
    private $marca;
    private $model;
    private $categoria;

    //Mètodes
    public function setMarca($marca){
        $this->marca=$marca;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setModel($model){
        $this->model=$model;
    }

    public function getModel(){
        return $this->model;
    }

    public function setCategoria($categoria){
        $this->categoria=$categoria;
    }

    public function getCategoria(){
        return $this->categoria;
    }

}