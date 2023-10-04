<!DOCTYPE html>
<html>
    <head>
        <title>PHP </title>
    </head>
    <body>
        <h1>Pràctica sessions</h1>
<?php
    ini_set('display_errors', 1); 

    // Inicio la sessió
    session_start();
?>
    <!--MENÚ D'OPCIONS-->
    <ul>
        <li><a href="?opcio=inici">Iniciar sessió</a></li>
        <li><a href="?opcio=a">Opció A</a></li>
        <li><a href="?opcio=b">Opció B</a></li>
        <li><a href="?opcio=c">Opció C</a></li>
        <li><a href="?opcio=tanca">Finalitzar sessió</a></li>
    </ul>

<?php
    if(@$_REQUEST['opcio']=="inici"){
        //Inicio sessió
        $_SESSION['iniciada']=true;
        $_SESSION['color']="3f3f3f"; //color gris per defecte
    }
    //Opcions que només s'executen si la sessió està iniciada
    if(@$_SESSION['iniciada']){
        if(@$_REQUEST['opcio']=="a"){
            //opció a, pintarem requadre de color vermell
            $_SESSION['color']="FF0000"; //Color vermell
        }elseif(@$_REQUEST['opcio']=="b"){
            //opció b, pintarem requadre de color verd
            $_SESSION['color']="00FF00"; //Color verd
        }elseif(@$_REQUEST['opcio']=="c"){
            //opció c, pintarem requadre de color blau
            $_SESSION['color']="0000FF"; //Color blau
        }elseif(@$_REQUEST['opcio']=="tanca"){
            //echo "Entro a l'opció TANCA SESSIÓ<br>";
            //tanca sessió
            session_unset();            //esborro dades de la sessió
            session_destroy();          //destrueixo sessió del servidor
            session_start();            //torno a iniciar nova sessió
            session_regenerate_id();    //li canvio l'identificador a la nova sessió
        }
    }
    

    echo "<div style=\"width:100px; height:100px; background-color:#"
            .@$_SESSION['color'].";\"></div>";

    // Mostrem l'identificador (ID) de la sessió
    echo "Id de sessió: ".session_id()."<br>";

    echo "Variables de sessió:<br>";
    var_dump($_SESSION);
    echo "<br>";
?>
    </body>
</html>