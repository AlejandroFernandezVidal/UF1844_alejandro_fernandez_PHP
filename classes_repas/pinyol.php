<?php

Class Pinyol Extends Fruita{

    //Atributs
    private $pellFina;
    private $pellRugosa;
    
    //Constructor
    public function __construct(){
    }

    //Mètodes
    public function setPellFina(){
        $this->pellFina=true;
        $this->pellRugosa=false;
    }
    public function setPellRugosa(){
        $this->pellFina=false;
        $this->pellRugosa=true;
    }
    public function getPellFina(){
        return $this->pellFina;
    }
    public function getPellRugosa(){
        return $this->pellRugosa;
    }
}