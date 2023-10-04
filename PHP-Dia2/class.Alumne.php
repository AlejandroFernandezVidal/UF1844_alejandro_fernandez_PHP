<?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors
    class Alumne{
        //Definim els atributs de tipues private (només per a ús dins de la classe)
        private $nom="";
        private $cognoms="";
        private $notes=Array();
        public static $numAlumnes=0;//Variable de classe
        public static $numMitjes=0;
        public static $sumaMitja=0;
        public static $mitjaTotal=0;

        //Mètode que s'executa en el moment de la creació d'instància
        public function __construct($nom, $cognoms){
            $this->nom=$nom;
            $this->cognoms=$cognoms;
            $this::$numAlumnes++;
        }

        //Mètode que em retorni el nom i el cognom
        public function getNomCognoms(){
            return $this->nom." ".$this->cognoms;
        }

        //Mètode per introduir una nota
        public function setNota($nota){
            //$this->notes[count($this->notes)]=$nota; //afegir element amb mètode count per saber l´última posició
            array_push($this->notes, $nota);
        }

        public function getArrayNotes(){
            var_dump($this->notes);
        }

        //Obtenim la nota mitja de l'Alumne
        public function getMitja(){
        $this::$numMitjes++;
        $this::$sumaMitja += round(array_sum($this->notes)/count($this->notes),2);
        $this::$mitjaTotal = round($this::$sumaMitja/$this::$numMitjes,2);
         return round(array_sum($this->notes)/count($this->notes),2);
        }

        //Obtenim la mitja global de tots el alumnes que he fet el getMitja()
        public function getMitjaGlobal(){
            return ($this::$sumaMitja/$this::$numMitjes);
        }

    }
?>