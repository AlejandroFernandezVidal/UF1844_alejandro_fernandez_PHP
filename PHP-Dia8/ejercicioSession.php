<html>
<head>
    <title>PHP Dia8 - Ejercicio Ejemplo</title>
</head>
<body>
    <h1>Pràctica 1 - Ejercicio</h1>
  
    <a href="ejercicioSession.php?inici=true">Iniciar</a><br>
    <a href="ejercicioSession.php?valor=A">Opción A</a><br>
    <a href="ejercicioSession.php?valor=B">Opción B</a><br>
    <a href="ejercicioSession.php?valor=C">Opción C</a><br>
    <a href="ejercicioSession.php?tancar=true">Tancar</a><br> 
   
    
    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors

    //Iniciar
    session_start();

    
    if(@$_REQUEST["inici"]==true){
        $_SESSION["iniciada"]=true;
        echo "<div style=\"width: 100px; height: 100px;border :black solid \"</div>";
    }

    if(@$_SESSION["iniciada"]==true){
        if(@$_REQUEST["tancar"]==true){
            //Tancar
            session_unset();
            session_destroy();
            echo "<br><br>sessió tancada";
        }    
        
        if(@$_REQUEST["valor"]=="A"){
            //OpciónA
            echo "<div style=\"width: 100px; height: 100px;background-color:red\"></div>";
        }
        
        if(@$_REQUEST["valor"]=="B"){
            //OpciónB
            echo "<div style=\"width: 100px; height: 100px;background-color:green\"></div>";
        }
    
        if(@$_REQUEST["valor"]=="C"){
            //OpciónC
            echo "<div style=\"width: 100px; height: 100px;background-color:blue\"></div>";
        }
    }

    ?>
</body>
</html>