<html>

<head>
    <title>PHP Dia4 - EjemploHerencia</title>
</head>
<body>
    <h1>Pràctica ejemplo - Herencia</h1>

    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors

    class Pare{
        public $cognom="";

        public function __construct($cognom){
            $this->cognom = $cognom;
        }
    }

    class Fill extends Pare{
        public $nom="";

        public function __construct($nom,$cognom){
            $this->nom=$nom;
            $this->cognom=$cognom;
        }

        public function getNomCognom(){
            return $this->nom." ".$this->cognom;
        }
    }

    $fill=new Fill("Alejandro","Fernández");
    echo $fill->getNomCognom();

    ?>
</body>
</html>