<?php

Class Fruita {
    
    //Atributs (public, private o static)
    private $color;
    private $pes;
    private $calibre;
    private $alçada;
    private $procedencia;
    private $nom;

    //Constructor
    public function __construct(){

    }

    //Mètodes
    public function setNom($nom){
        $this->nom=$nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setProcedencia($procedencia){
        $this->procedencia=$procedencia;
    }

    public function getProcedencia(){
        return $this->procedencia;
    }

    public function setPropietats($color,$pes,$calibre,$alçada){
        $this->color=$color;
        $this->pes=$pes;
        $this->calibre=$calibre;
        $this->alçada=$alçada;
    }

    public function getColor(){
        return $this->color;
    }

    public function getPes(){
        return $this->pes;
    }

    public function getCalibre(){
        return $this->calibre;
    }

    public function getAlçada(){
        return $this->alçada;
    }

    public function getVolumMaxim(){
        //La meva solució que es correcta per cilindres només
        //$r=$this->calibre/2;
        //return round(M_PI*$r*$r*$this->alçada,2);
        
        //Solució Mateu per si el volum es diferent d'un cilindre
        $volum=pi()*$this->alçada*pow($this->calibre/2,2);
        return round($volum,2);
    }

    public function debug(){
        echo "NOM:".$this->nom."<br>";
        echo "PES:".$this->pes."<br>";
        echo "CALIBRE:".$this->calibre."<br>";
        echo "ALÇADA:".$this->alçada."<br>";
        echo "COLOR:".$this->color."<br>";
        echo "PROCEDENCIA:".$this->procedencia."<br>";
        echo "VOLUM_MAXIM:".$this->getVolumMaxim()."<br><br>";
    }
}