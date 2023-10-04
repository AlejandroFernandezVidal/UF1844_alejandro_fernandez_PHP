<html>

<head>
    <title>PHP ejercicios</title>
</head>
<body>
    <h1>Ejercicio 1</h1>

    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors
    
    /*crea un array de 20 posiciones y obten la suma de todas las posiciones
    variante opten la suma de los números pares y de los impares*/
    $numeros=Array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
    /* $numeros=Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1); */
    $resultado=0;
    $resultadoPar=0;
    $resultadoImpar=0;
    
    foreach($numeros as $numero){
        /* $resultado +=$numero; */ //nos podemos ahorrar una suma si sumamos el resultado par y resultado impar
        if($numero%2==0){
            $resultadoPar += $numero;
        }else {
            $resultadoImpar += $numero;
        }
    }
    $resultado = $resultadoPar + $resultadoImpar;

    echo "<p>La suma total de números es $resultado</p>";

    //Mi primera intención es hacerlo por separado para respetar el enunciado, al corregir veo la posibilidad de hacerlo junto
    /* foreach($numeros as $numero) {
        if($numero%2==0){
            $resultadoPar += $numero;
        }else {
            $resultadoImpar += $numero;
        }
    } */

    echo "<p>los números pares suman $resultadoPar</p>";
    echo "<p>los números impares suman $resultadoImpar</P>"
    

?>

<h1>Ejercicio 2</h1>

<?php 
    /*Creamos dos array de 5 posiciones y obtenemos la multiplicación de estos
    entre elmentos equivalentes (0-0,1-1,...)
    El resultado se tiene que mostrar por pantalla
    
    Variante : pon los resultados en un array y muestra como valor final el array resultante (var_dump o con bucle*/

    $array1=Array(1,2,3,4,5);
    $array2=[1,2,3,4,5];//se puede declarar también de esta manera
    
    $resultado=0;
    $resultadoArray=Array();
    
    for($i=0; $i<count($array1); $i++){
        $resultado = $array1[$i] * $array2[$i];
        echo "<p>elemento[$i] $resultado</p>";
        /* array_push($resultadoArray, $resultado); */
        $resultadoArray[$i]=$resultado;
    }

    echo var_dump($resultadoArray);
    
    foreach($resultadoArray as $resultadoA){
        echo "<br>$resultadoA";
    }

?>

</body>
</html>