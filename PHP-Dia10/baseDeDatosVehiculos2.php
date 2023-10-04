<!--Alejandro Fernández Vidal-->
<html>
<head>
    <title>PHP Dia10 - Base de datos Vehículos</title>
</head>
<body>
    <h1>Práctica 1.2 - Vehículos con excepciones</h1>
    <?php 
    ini_set("display_errors", 1);
    
    try{
            
        $base=mysqli_connect("localhost","root","","ejercicioVehiculos");
        validarConexion($base);
            
        $tipo = strtoupper(@$_REQUEST["tipo"]);
        validarTipo($tipo);

        $resultat = mysqli_query($base,"SELECT * FROM vehiculos WHERE tipo=\"$tipo\"");

        echo "<ul>";
        while($vehiculo=mysqli_fetch_object($resultat)){
            echo "<li>Matricula:".$vehiculo->matricula." Marca: ".$vehiculo->marca." Modelo: ".$vehiculo->model." Color: ".$vehiculo->color." Tipo: ".$vehiculo->tipo."</li>"; 
        }
        echo "</ul>";

        mysqli_close($base);

        }catch(Exception $e){
            echo $e->getMessage();
            @mysqli_close($base);
        }

    function validarConexion($base){
        if($base){
            echo "Conexión correcta<br>";
        }else{
            throw new Exception("No hay conexión");}
    }

    function validarTipo($tipo){
        if($tipo=="CO"||$tipo=="MO"||$tipo=="CA"||$tipo=="AU"){
            return true;
        }elseif($tipo!=""){
            throw new  Exception("El tipo no es correcto");
        }
    }

    ?>
</body>
</html>