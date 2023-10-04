<html>

<head>
    <title>PHP Dia0 - Hola mundo</title>
</head>
<body>
    <h1>Pràctica 0 - Suma</h1>
    <p>Hola,<br>
        què tal?</p>
    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors

    $a=0; //Inicialitzo la variable $a amb valor zero
    $b=6; //Inicialitzo la variable $b amb valor sis
    
    $resultat=$a+$b; //Inicialización la variable resultado y le indico la operación a realizar

    echo $resultat."<br>"; //Muestra en el navegador el resultado amb salt de línea
    echo "<br>";
    echo "\n<br>El resultat de a + b és " .$resultat;
    // \n-->és un salt de línea (ha d'estar dins de les comes)
    echo "\n<br>El resultat de ".$a." + ".$b." és " .$resultat;
    echo "\n<br>El resultat de $a i $b és $resultat";
?>
</body>
</html>