<?php

Class Pinyol Extends Fruita {

    //Atributs
    private $pellFina;
    private $pellRugosa;

    //Constructor
    public function __constructor(){
    }

    //Mètodes
    public function setPellFina(){
        $this->pellFina=true;
        $this->pellRugosa=false;
    }

    public function getPellFina(){
        return $this->pellFina;
    }

    public function setPellRugosa(){
        $this->pellRugosa=true;
        $this->pellFina=false;
    }

    public function getPellRugosa(){
        return $this->pellFina;
    }

}