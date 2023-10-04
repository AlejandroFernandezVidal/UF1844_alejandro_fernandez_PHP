<html>

<head>
    <title>PHP Dia3 - Excepcions</title>
</head>
<body>
    <h1>Pràctica excepcions</h1>

    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors

    //Funció que calcula la divisió entre dos valors
    //Pre: valor1>=0 && valor2>0
    //Post: result>=0
    function divisio($valor1, $valor2){
        if($valor2<=0){
            throw new Exception("Divisió entre zero");
        }
        return $valor1/$valor2;
    }

    try{
        echo divisio(10,3)."<br>";
        echo divisio(10,2)."<br>";
        echo divisio(10,1)."<br>";
        echo divisio(10,0)."<br>";
        echo divisio(10,5)."<br>";
    } catch (Exception $e){
        echo "<h3>Error</h3>";
        echo "<p>S'ha produit un error : ".$e->getMessage()."</p>";
    }
    
    ?>
</body>
</html>