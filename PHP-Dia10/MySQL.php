<html>
<head>
    <title>PHP DiaX - XXX</title>
</head>
<body>
    <h1>Pràctica X - XXX</h1>
    <?php 
    ini_set("display_errors", 1);
    
    //Iniciem connexió a base de dades MySQL
    $base=mysqli_connect("localhost","root","","primeraBaseDeDatos");

    $edat = @$_REQUEST["edat"];
    if(!is_numeric($edat)) $edat=150;
    
    if($base){
        echo "connexio correcte<br>";
        echo mysqli_GET_host_info($base)."<br>";

        $resultat = mysqli_query($base,"SELECT * FROM persones;");
        $resultat1 = mysqli_query($base,"SELECT * FROM persones WHERE edat>$edat");

        if($resultat==false){
            echo "ERROR!!!! a l'escriure la consulta<br>";
        }else{
            echo "La query m'ha retornat ".mysqli_num_rows($resultat)." registres<br>";

            echo "<ul>";
            while($persona=mysqli_fetch_object($resultat1)){
                echo "<li>Nom :".$persona->nom.",Cognom: ".$persona->cognom.",edat:".$persona->edat."</li>";
                
            }
            echo "</ul>";
        }

        mysqli_close($base);
    }else{
        echo "ERROR!!!<br>";
    }

    ?>
</body>
</html>