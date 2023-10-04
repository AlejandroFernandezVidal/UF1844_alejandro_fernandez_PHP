<!DOCTYPE html>
<html>
    <head>
        <title>PHP </title>
    </head>
    <body>
        <h1>Pràctica Connexió a Base de Dades</h1>
<?php
    ini_set('display_errors', 1); 

    //Iniciem connexió a base de dades MySQL
    //Servidor: localhost (mateix PC)
    //Usuari: root
    //Contrasenya: (enblanc)
    //Nom de la base de dades: primerabasededades
    $base=mysqli_connect("localhost","root","","primerabasededades");

    //Si la connexió s'ha fet correctament
    if($base){
        echo "Connexió feta correctament<br>";
        echo mysqli_GET_host_info($base)."<br>"; //Printem les dades del servidor

        // Faig una consulta (query) a la base de dades
        // Concretament, li demano tots els registres de la taula persones
        $resultat=mysqli_query($base,"SELECT * FROM persones;");
        
        //Comprovo si la consulta (query) m'ha donat un error
        if($resultat==FALSE){
            echo "ERROR!!!! a l'escriure la consulta<br>";
        } else { //En cas que no hi hagi error
            //Printem el número de registres (rows=columnes) que m'ha retornat la query
            echo "La query m'ha retornat ".mysqli_num_rows($resultat)." registres<br>";


            //AMb aquest while recorrerem tots els registres del resultat
            //A cada iteració del while, l'objecte $persona tindrà com atributs
            //  els camps d'un dels registres
            echo "<ul>";
            while($persona=mysqli_fetch_object($resultat)){
                //Printo per a cada registre, un item de la llista que conté
                //  el nom, cognom i edat de la persona
                echo "<li>Nom: ".$persona->Nom.", Cognoms: ".
                    $persona->Cognoms.", Edat: ".$persona->Edat."</li>";
            }
            echo "</ul>";
        }


        mysqli_close($base);
    }else{  //Si la connexió ha fallat
        echo "ERROR!!!!<br>";
    }
    
    
?>
    </body>
</html>