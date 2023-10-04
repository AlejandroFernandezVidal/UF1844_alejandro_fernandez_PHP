<?php

Class Microones extends Electrodomestic {

    //Atributs
    private $potencia;
    private $grill;

    //Mètodes
    public function setPotencia($potencia){
        $this->potencia=$potencia;
    }

    public function getPotencia(){
        return $this->potencia;
    }

    public function setGrill($grill){
        $this->grill=$grill;
    }

    public function getGrill(){
        return $this->grill;
    }

    public function calcularCategoria(){
        
        if($this->grill)$this->potencia=$this->potencia+100;
        
        if($this->potencia<= 500){
            $this->categoria="A";
        }else if($this->potencia<=600){
            $this->categoria="B";
        }else if($this->potencia<=700){
            $this->categoria="C";
        }else if($this->potencia<=800){
            $this->categoria="D";
        }else if($this->potencia<=900){
            $this->categoria="E";
        }else{
            $this->categoria="F";
        }

        return $this->categoria;
    }
}