<html>

<head>
    <title>PHP Dia4 - Classes</title>
</head>
<body>
    <h1>Pràctica 1 - ejercicio  sintesis classes</h1>
    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors

    class Vehicle{
        private $matricula="";
        private $marca="";
        private $model="";

        public function __construct($matricula,$marca,$model){
            $this->matricula = $matricula;
            $this->marca = $marca;
            $this->model = $model;
            $this->incrementQuantitat();//Cridem a la funció per incrementar i comptar els tipus de vehícules creats
        }

        public function potAparcar($planta){

        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getModel(){
            return $this->model;
        }

        public function setModel($model){
            $this->model = $model;
        }
    }

    class Moto extends Vehicle{
        public static $quantitatMotos=0;
        public function incrementQuantitat(){
            $this::$quantitatMotos++;
        }
        public function potAparcar($planta){
            return ($planta==0 || $planta==-1)?true:false;//Cambiem a operador ternari per simplificar
            /* if($planta==0 || $planta==-1){
                return true;
            }else{
                return false;
            } */
        }
        
    }

    class Cotxe extends Vehicle{
        public static $quantitatCotxes=0;
        public function incrementQuantitat(){
            $this::$quantitatCotxes++;
        }
        public function potAparcar($planta){
            return ($planta==0 || $planta==-1 || $planta==1)?true:false;//Cambiem a operador ternari per simplificar
            /* if($planta==0 || $planta==-1 || $planta==1){
                return true;
            }else{
                return false;
            } */
        }
    }

    class Camio extends Vehicle{
        public static $quantitatCamions=0;
        public function incrementQuantitat(){
            $this::$quantitatCamions++;
        }
        public function potAparcar($planta){
            return $planta==0 ? true: false;//Cambiem a operador ternari per simplificar
            /* if($planta==0){
                return true;
            }else{
                return false;
            } */
        }
    }

    class Autobus extends Vehicle{
        public static $quantitatAutobusos=0;
        public function incrementQuantitat(){
            $this::$quantitatAutobusos++;
        }
        public function potAparcar($planta){
            return $planta==0 ? true: false;//Cambiem a operador ternari per simplificar
            /* if($planta==0){
                return true;
            }else{
                return false;
            } */
        }
    }
    
    //Creació d'objectes vehicles
    $moto=new Moto("0000AAA","Kimko","Superdink");
    $moto1=new Moto("9999ZZZ","Aprilia","Sportcity");
    $cotxe=new Cotxe("0000AAA","Kia","Ceed");
    $camio=new Camio("0000AAA","Volvo","FH");
    $camio1=new Camio("0000AAA","Man","FR1");
    $camio2=new Camio("0000AAA","Mercedes","FT");
    $autobus=new Autobus("0000AAA","Isuzu","ELF 600");
    
    //Verificació del correcte funcionament del mètode potAparcar() en cada situació
    echo ($moto->potAparcar(0)==true)? "La moto sí pot aparcar<br>":"La moto no pot aparcar<br>";//Cambiem a operador ternari per simplificar
    /* if($moto->potAparcar(0)==true){
        echo "La moto sí pot aparcar<br>";
    }else{
        echo "La moto no pot aparcar<br>";
    } */

    echo ($cotxe->potAparcar(0)==true)?"El cotxe sí pot aparcar<br>":"El cotxe no pot aparcar<br>";
    /* if($cotxe->potAparcar(0)==true){
        echo "El cotxe sí pot aparcar<br>";
    }else{
        echo "El cotxe no pot aparcar<br>";
    } */

    echo ($camio->potAparcar(-1)==true)?"El camió sí pot aparcar<br>":"El camió no pot aparcar<br>";
   /*  if($camio->potAparcar(-1)==true){
        echo "El camió sí pot aparcar<br>";
    }else{
        echo "El camió no pot aparcar<br>";
    } */

    echo ($autobus->potAparcar(1)==true)?"L'autobus sí pot aparcar<br>":"L'autobus no pot aparcar<br>";
    /* if($autobus->potAparcar(1)==true){
        echo "L'autobus sí pot aparcar<br>";
    }else{
        echo "L'autobus no pot aparcar<br>";
    } */
    
    //Verificació de funcionament de mètodes get y set
    echo $moto->getMatricula();
    echo $moto->setMatricula("1111ABC");
    echo $moto->getMatricula();
    echo $moto->getMarca();
    echo $moto->setMarca("KIMKO");
    echo $moto->getMarca();
    echo $moto->getModel();
    echo $moto->setModel("SUPERDINK");
    echo $moto->getModel();

    echo $cotxe->getMatricula();
    echo $cotxe->setMatricula("2222ABC");
    echo $cotxe->getMatricula();
    echo $cotxe->getMarca();
    echo $cotxe->setMarca("KIA");
    echo $cotxe->getMarca();
    echo $cotxe->getModel();
    echo $cotxe->setModel("CEED");
    echo $cotxe->getModel();

    echo $camio->getMatricula();
    echo $camio->setMatricula("3333ABC");
    echo $camio->getMatricula();
    echo $camio->getMarca();
    echo $camio->setMarca("VOLVO");
    echo $camio->getMarca();
    echo $camio->getModel();
    echo $camio->setModel("FHH");
    echo $camio->getModel();

    echo $autobus->getMatricula();
    echo $autobus->setMatricula("9876AZA");
    echo $autobus->getMatricula();
    echo $autobus->getMarca();
    echo $autobus->setMarca("ISUZU");
    echo $autobus->getMarca();
    echo $autobus->getModel();
    echo $autobus->setModel("ELF610");
    echo $autobus->getModel();
    
    //Accés a la variable static de cada objecte per comprovar que funciona
    echo "<br><br>";
    echo $moto::$quantitatMotos;
    echo "<br><br>";
    echo $cotxe::$quantitatCotxes;
    echo "<br><br>";
    echo $camio1::$quantitatCamions;
    echo "<br><br>";
    echo $autobus::$quantitatAutobusos;

    ?>
</body>
</html>