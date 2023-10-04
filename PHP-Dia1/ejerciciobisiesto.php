<html>

<head>
    <title>PHP año bisiesto</title>
</head>
<body>
    <h1>Pràctica 3</h1>

    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors
    /*Fes una llista amb els últims 30 anys de traspàs (bisiesto) des de 2023 cap enrere*/
    $año = 2023;
    $i = 0;

    if($año >= 1 && $año <= 2023){
        do{
            if($año % 400 == 0){
                echo "es bisiesto $año<br>";
                $i++;
            } elseif($año % 4 == 0 && $año % 100 != 0){
                echo "es bisiesto $año<br>";
                $i++;
            }/*  else {
                echo "no es bisiesto";
            } */
            $año--;
        }while($i < 30 && $año > 0);
    }else {
        echo "El año introducido no es correcto";
    }
    ?>

    <h1>Pràctica 3.2</h1>

    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors
    /*Fes una llista amb els pròxim 30 anys de traspàs (bisiesto) des de 2023*/
    $año = 2023;
    $i = 0;

    if($año >= 2023){
        do{
            if($año % 400 == 0){
                echo "es bisiesto $año<br>";
                $i++;
            } elseif($año % 4 == 0 && $año % 100 != 0){
                echo "es bisiesto $año<br>";
                $i++;
            }
            $año++;
        }while($i < 30);
    }else {
        echo "El año introducido no es correcto";
    }
    
    ?>

    <h1>Resolución Mateu</h1>
    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors
    /*Fes una llista amb els últims 30 anys de traspàs (bisiesto) des de 2023 cap enrere*/
    $any = 2023;
    $numAnysTraspas = 0;

    while($numAnysTraspas<30){
        if($any%400==0 || ($any%4==0 && $any%100!=0)){
            echo "$any és de traspàs<br>";
            $numAnysTraspas++;
        }
        $any--;
    }
    
    ?>
    <h1>Resolución Mateu</h1>

    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors
    /*Fes una llista amb els pròxim 30 anys de traspàs (bisiesto) des de 2023*/
    $any = 2023;
    $numAnysTraspas = 0;

    while($numAnysTraspas<30){
        if($any%400==0 || ($any%4==0 && $any%100!=0)){
            echo "$any és de traspàs<br>";
            $numAnysTraspas++;
        }
        $any++;
    }
    
    //Declarem una funció amb el nom "esAnyDeTraspas"
    //Pre : $any és un número > 0
    //Post : hem retornarà true si $any és de traspàs
    function esAnyDeTraspas($any){
        if($any%400==0 || ($any%4==0 && $any%100!=0)){
            return true;
        }
        return false;
    }

    echo "<h3> funció esAnyDeTraspas</h3>";
    echo esAnyDeTraspas(2023)."<br>";

    if(esAnyDeTraspas(2023)==true){
        echo "És de traspàs<br>";
    }else{
        echo "No és de traspàs";
    }
    ?>

    <h1>Resolución Mateu amb funció</h1>
    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors
    /*Fes una llista amb els últims 30 anys de traspàs (bisiesto) des de 2023 cap enrere*/
    $any = 2023;
    $numAnysTraspas = 0;

    while($numAnysTraspas<30){
        if(esAnyDeTraspas($any)){
            echo "$any és de traspàs<br>";
            $numAnysTraspas++;
        }
        $any--;
    }
    
    ?>
</body>
</html>