<?php

Class Baia Extends Fruita{

    //Atributs
    private $silvestre;
    
    //Constructor
    public function __construct(){
    }

    //Mètodes
    public function setSilvestre(){
        $this->silvestre=true;
    }
    public function getSilvestre(){
        return $this->silvestre;
    }

}