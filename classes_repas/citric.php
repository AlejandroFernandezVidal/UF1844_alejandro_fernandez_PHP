<?php

Class Citric Extends Fruita{

    //Atributs
    private $acidesa;
    
    //Constructor
    public function __construct(){
    }

    //Mètodes
    public function setAcidesa($valor){
        $this->acidesa=$valor;
    }
    public function getAcidesa(){
        return $this->acidesa;
    }

}