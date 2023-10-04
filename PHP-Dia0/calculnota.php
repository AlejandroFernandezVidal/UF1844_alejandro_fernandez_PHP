<html>

<head>
    <title>PHP Dia0 - Càlcul nota</title>
</head>
<body>
    <h1>Pràctica 1 - Càlcul nota</h1>
    
    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors

    $nota=5.5;

    if($nota >= 9){
        echo "Excel·lent";
    } else {
        if($nota >= 7){
            echo "Notable";
        } else {
            if($nota >= 5) {
                echo "Aprovat";
            } else {
                echo "Suspès";
            }
        }
    }

    if($nota >= 9){
        echo "Excel·lent";
    } elseif ($nota >= 7) {
        echo "Notable";
    } elseif ($nota >= 5) {
        echo "Aprovat";
    } else {
        echo "Suspès";
    }
        
?>

<h2>Matrícula d'honor</h2>
<?php

    $nota=10;

    if($nota == 10) {
        echo "SI";
    } else {
        echo "NO";
    }

    if($nota != 10) {
        echo "NO";
    } else {
        echo "SI";
    }

    $num = 3;
    $num2 = "3";

    if($num === $num2){
        echo "SON IGUALES";
    } else {
        echo "SON DE DISTINTO TIPO";
    }
?>

<h2>Casi aprobado...</h2>
<?php
    $nota = 4.3;
    if($nota >= 4 && $nota < 5) {
        echo "Tens opcions per aprovar";
    }
?>

</body>
</html>