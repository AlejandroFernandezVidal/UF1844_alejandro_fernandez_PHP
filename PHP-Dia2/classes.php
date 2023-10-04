<html>

<head>
    <title>PHP Dia2 - Classes</title>
</head>
<body>
    <h1>Pràctica 1 - Classes</h1>

    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors
    /* include("class.Alumne.php"); *///importamos la clase Alumne que está en otro archivo
    include("clases/Alumne.php");//Importamos la clase Alumne desde una carpeta con las clases
    //Comentamos la clase para poder importarla 
    /* class Alumne{
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

    } */

    $a1 = new Alumne("Alejandro","Fernández Vidal");
    echo $a1->getNomCognoms();
    $a1->setNota(9.9);
    $a1->setNota(8.5);
    $a1->setNota(3.4);
    $a1->getArrayNotes();
    echo "<br>La mitja de l'alumne ".$a1->getNomCognoms()." és ". $a1->getMitja()."<br>";

    $a2 = new Alumne("Mateu","Tres");
    $a2->setNota(7.7);
    $a2->setNota(5.5);
    echo "<br>La mitja de l'alumne ".$a2->getNomCognoms()." és ". $a2->getMitja()."<br>";

    $manoli = new Alumne("Manoli","Pérez");

    echo "Variable de classe per a1 : ".$a1::$numAlumnes."<br>";
    echo "Variable de classe per a2 : ".$a2::$numAlumnes."<br>";
    echo "Variable de classe per manoli : ".$manoli::$numAlumnes."<br>";

    /*Mitjançant variables de classe, has de poder obtenir des de qualsevol instància d'Alumne la següent informació :
    -nº d'alumnes que he calculat la mitja (getMitja)
    -mitja global de tots aquests alumnes*/

    echo "Variable de classe per la mitja : ".$a1::$numMitjes."<br>";
    echo "Variable de classe per la mitja : ".$a2::$numMitjes."<br>";
    echo "Variable de classe per la mitja : ".$manoli::$numMitjes."<br>";
    echo "Variable de classe per la sumaMitja : ".$a1::$sumaMitja."<br>";
    echo "Variable de classe per la mitjaTotal : ".$a1::$mitjaTotal."<br>";
    echo "Variable de classe per la sumaMitja : ".$a2::$sumaMitja."<br>";
    echo "Variable de classe per la mitjaTotal : ".$a2::$mitjaTotal."<br>";
    echo "Variable de classe per la sumaMitja : ".$manoli::$sumaMitja."<br>";
    echo "Variable de classe per la mitjaTotal : ".$manoli::$mitjaTotal."<br>";

    echo round($manoli->getMitjaGlobal(),2)."<br>";
    ?>
</body>
</html>