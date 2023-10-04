<html>
<head>
    <title>PHP Dia8 - Sessions</title>
</head>
<body>
    <h1>Ejemplo - Sessions</h1>
    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors

    //Crear la sessió
    session_start();

    //Procediment per tancar sessió, quan posem paràmetre url ?tanca=1
    if(@$_REQUEST["tanca"]==1){
        session_unset();//borrem dades la sessió
        session_destroy();//eliminem la sessió
        echo "sessió tancada";
        exit();//Para finalizar programa y evitar que se ejecute el resto del código
    }

    //Imprimim el número asignat a la sessió
    echo "La SESSID és ".session_id()."<br>";

    //Deineixo una variable de sessió i li poso un valor
    //$_SESSION["color"]="#3f2200";
    $_SESSION["userID"]=122;

    //Canvio valor de session color a partir de paràmetre url
    if(isset($_REQUEST["color"])){
        $_SESSION["color"]=$_REQUEST["color"];
    }

    //Printo un contenidor (div) amb el color de fons
    echo "<div style=\"width: 100px; height: 100px;background-color:#".$_SESSION["color"]."\">#".$_SESSION["color"]."</div>";

    //Printo totes les variables de sessió
    var_dump($_SESSION);

    ?>
</body>
</html>