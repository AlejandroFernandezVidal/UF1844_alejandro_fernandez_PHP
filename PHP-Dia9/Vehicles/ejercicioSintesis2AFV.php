<!--Alejandro Fernandez Vidal-->
<html>
<head>
    <title>PHP Dia6 - Clases include()</title>
</head>
<body>
    <h1>Práctica 3 - ejercicio  síntesis clases</h1>
    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors
    
    //importamos clases a utilizar con la instrucción include("nombreArchivo.php")
    include("class.Vehicle.php");
    include("class.Autobus.php");
    include("class.Camio.php");
    include("class.Cotxe.php");
    include("class.Moto.php");
    
    //Creació d'objectes vehicles
    $moto=new Moto("0000AAA","Kimko","Superdink");
    $moto1=new Moto("9999ZZZ","Aprilia","Sportcity");
    $cotxe=new Cotxe("0000AAA","Kia","Ceed");
    $camio=new Camio("0000AAA","Volvo","FH");
    $camio1=new Camio("0000AAA","Man","FR1");
    $camio2=new Camio("0000AAA","Mercedes","FT");
    $autobus=new Autobus("0000AAA","Isuzu","ELF 600");
    
    //Verificació del correcte funcionament del mètode potAparcar() en cada situació
    echo ($moto->potAparcar(0)==true)? "La moto sí pot aparcar<br>":"La moto no pot aparcar<br>";

    echo ($cotxe->potAparcar(0)==true)?"El cotxe sí pot aparcar<br>":"El cotxe no pot aparcar<br>";

    echo ($camio->potAparcar(-1)==true)?"El camió sí pot aparcar<br>":"El camió no pot aparcar<br>";

    echo ($autobus->potAparcar(1)==true)?"L'autobus sí pot aparcar<br>":"L'autobus no pot aparcar<br>";
    
    echo "<br>";
    
    //Verificació de funcionament de mètodes get y set per a cada tipus de vehicle
    echo $moto->getMatricula();
    echo $moto->setMatricula("1111ABC");
    echo $moto->getMatricula();
    echo $moto->getMarca();
    echo $moto->setMarca("KIMKO");
    echo $moto->getMarca();
    echo $moto->getModel();
    echo $moto->setModel("SUPERDINK");
    echo $moto->getModel();
    
    echo "<br>";
    
    echo $cotxe->getMatricula();
    echo $cotxe->setMatricula("2222ABC");
    echo $cotxe->getMatricula();
    echo $cotxe->getMarca();
    echo $cotxe->setMarca("KIA");
    echo $cotxe->getMarca();
    echo $cotxe->getModel();
    echo $cotxe->setModel("CEED");
    echo $cotxe->getModel();

    echo "<br>";

    echo $camio->getMatricula();
    echo $camio->setMatricula("3333ABC");
    echo $camio->getMatricula();
    echo $camio->getMarca();
    echo $camio->setMarca("VOLVO");
    echo $camio->getMarca();
    echo $camio->getModel();
    echo $camio->setModel("FHH");
    echo $camio->getModel();

    echo "<br>";

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
    echo "motos : ".$moto::$quantitatMotos;
    echo "<br>";
    echo "cotxes : ".$cotxe::$quantitatCotxes;
    echo "<br>";
    echo "camions : ".$camio1::$quantitatCamions;
    echo "<br>";
    echo "autobusos : ".$autobus::$quantitatAutobusos;
    
    ?>
</body>
</html>