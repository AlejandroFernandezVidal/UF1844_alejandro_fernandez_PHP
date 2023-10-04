<html>

<head>
    <title>PHP Dia0 - Bucles</title>
</head>
<body>
    <h1>Pràctica 2 - Bucles</h1>
    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors
    
    for($i=0; $i<11; $i++){
        echo "$i<br>";
    }
   
?>

<h3>Variant : anys entre 1940 i 2023</h3>
<?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors

    for($i=1940; $i<2024; $i++){
        echo "$i<br>";
    }

?>

<h3>Bucles While</h3>
<?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors

    $i=0;
    while($i<11){
        echo "$i<br>";
        $i++;
    }
?>

<h3>Bucles Do While</h3>
<?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors

    $i=0;
    do {
        echo "$i<br>";
        $i++;
    } while ($i<11);

?>
</body>
</html>