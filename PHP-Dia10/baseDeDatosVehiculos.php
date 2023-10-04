<!--Alejandro Fernández Vidal-->
<html>
<head>
    <title>PHP Dia10 - Base de datos Vehiculos</title>
</head>
<body>
    <h1>Pràctica 1 - Vehiculos</h1>
    <?php 
    ini_set("display_errors", 1);
    
    $base=mysqli_connect("localhost","root","","ejercicioVehiculos");

    $tipo = strtoupper(@$_REQUEST["tipo"]);
    echo $tipo;
    if($tipo=="CO"||$tipo=="MO"||$tipo=="CA"||$tipo=="AU"){
    
        if($base){
            echo "connexio correcte<br>";
            echo mysqli_GET_host_info($base)."<br>";

            $resultat = mysqli_query($base,"SELECT * FROM vehiculos WHERE tipo=\"$tipo\"");

            echo "<ul>";
            while($vehiculo=mysqli_fetch_object($resultat)){
                echo "<li>Matricula:".$vehiculo->matricula." Marca: ".$vehiculo->marca." Modelo: ".$vehiculo->model." Color: ".$vehiculo->color." Tipo: ".$vehiculo->tipo."</li>"; 
            }
            echo "</ul>";

            mysqli_close($base);
        }else{
        echo "ERROR!!! en la conexión<br>";
        }
    }elseif($tipo!=""){
        echo "ERROR!!! El tipo indicado de vehiculo no es correcto";
    }
    ?>
</body>
</html>