<html>
<head>
    <title>PHP Dia8 - Cookie</title>
</head>
<body>
    <h1>Ejemplo - Cookie</h1>
    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors
    
    //Deso una variable a les cookies amb nom "idioma" i valor "català"
    setcookie("idioma","català");

    //Obtinc valor de la variable "idioma" de la cookie
    echo @$_COOKIE['idioma']."<br>";

    //Deso una nova variable a les cookies amb nom "temporal", valor "sí" i caducitat en 30 segons
    setcookie("temporal","sí",time()+60*60*24*30);

    //Deso un array en una variable de la cookie
    $colorsPreferits=Array("Blau","Verd","Vermell");

    setcookie("colors",serialize($colorsPreferits));//transformem l'array a cadena de text per poder guardarla(no guarda arrays)

     //Obtinc la variable serialitzada de la cookie i la deserialitzo
    $nouArray=unserialize(@$_COOKIE['colors']);//ponemos @ para evitar el error en el primer inicio de sesión
    var_dump($nouArray);

    //Per obtenir totes les variables que hi ha desades a les cookie 
    var_dump($_COOKIE);

    ?>
</body>
</html>