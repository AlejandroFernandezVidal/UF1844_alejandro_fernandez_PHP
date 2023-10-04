<?php

Class Rentadora extends Electrodomestic {

    //Atributs
    private $capacitat;
    private $revolucions;

    //Mètodes
    public function setCapacitat($capacitat){
        $this->capacitat=$capacitat;
    }

    public function getCapacitat(){
        return $this->capacitat;
    }

    public function setRevolucions($revolucions){
        $this->revolucions=$revolucions;
    }

    public function getRevolucions(){
        return $this->revolucions;
    }
}