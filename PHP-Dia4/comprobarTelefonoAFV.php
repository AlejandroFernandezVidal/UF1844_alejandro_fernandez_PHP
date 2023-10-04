<html>

<head>
    <title>PHP Dia4 - Comprobar teléfono</title>
</head>
<body>
    <h1>Pràctica Extra - Comprobar teléfono</h1>

    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors

    //Función para comprobar un número de teléfono
    //Pre : el teléfono tiene 9 dígitos y empieza por 6,7 o 9
    //Post : número de teléfono
    function comprovaTelefon($tel){
        $arrayTelefono = str_split($tel);
        
        if(count($arrayTelefono) != 9){
            throw new Exception ("La longitud del número no es correcto");
        } elseif($arrayTelefono[0] != 6 && $arrayTelefono[0] != 7 && $arrayTelefono[0] != 9){
            throw new Exception ("No empieza por un número correcto");
        }

        return $tel;
    }

    try{
        echo comprovaTelefon(936565151)."<br>";
        echo comprovaTelefon(600600600)."<br>";
        echo comprovaTelefon(755855685)."<br>";
        echo comprovaTelefon(1004)."<br>"; 
    }catch (Exception $e){
        echo "<p>Error : ".$e->getMessage()."</p>";
    }

    //Solucion Meteu
    /* function comprovaTelefon($tel){
        
        if($tel < 100000000 || $tel >= 1000000000){
            throw new Exception ("La longitud del número no es correcto");
        } elseif(round($tel/10000000,0)<6 || round($tel/1000000000,0)==8){
            throw new Exception ("No empieza por un número correcto");
        }

        return $tel;
    }

    try{
        echo comprovaTelefon(936565151);
        echo comprovaTelefon(600600600);
        echo comprovaTelefon(755855685);
        echo comprovaTelefon(1004); 
    }catch (Exception $e){
        echo "<p>Error : ".$e->getMessage()."</p>";
    } */
    
    ?>
</body>
</html>