<html>

<head>
    <title>PHP Arrays</title>
</head>
<body>
    <h1>Pràctica X - XXX</h1>

    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors

    $diasetmana=Array("dilluns","dimarts","dimecres","dijous","divendres","dissabte","diumenge");
    var_dump($diasetmana);//visualizar array de manera "sucia"
   
    echo "<!--";//para no visualizar el array en la página principal pero sí en código fuente
    var_dump($diasetmana);
    echo "-->";

    echo "<p> El primer dia de la setamana és : $diasetmana[0]</p>";//visualizar un elemento del array

    echo "<h3>Llistem tots el dies de la setmana amb un for </h3>";
    for($x=0; $x<count($diasetmana); $x++){//count nos devuelve la longitud del array
        echo "<p>$diasetmana[$x]</p>";
    }

    echo "<h3>Llistem tots el dies de la setmana amb un foreach </h3>";
    foreach($diasetmana as $dia){//del array completo separamos los elementos de uno en uno
        echo "<p>$dia</p>";
    }



?>
</body>
</html>