<html>

<head>
    <title>PHP request</title>
</head>
<body>
    <h1>Pràctica Request</h1>

    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors
    
    /*Tipus de variables REQUEST :
    $_REQUEST['nom'] --> llegueix tant _GET com _POST
    $_GET['nom'] --> visibles, obtingudes de la URL
    $_POST['nom'] --> ocultes (des de formulari)
    */

    //@$_REQUEST el símbolo @ sirve para que no imprima el error en pantalla

    echo "<p>Nom : ".$_REQUEST['nom']."<br>";
    echo "Cognom : ".@$_REQUEST['cognom']."</p>";

    echo "<p>Nom : ".$_GET['nom']."<br>";
    echo "Cognom : ".$_GET['cognom']."</p>";
    ?>
    <h4>Formulari</h4>

    <form name="formulari" action="request.php" method="GET"> <!-- GET=visible POST=ocult -->
        Nom : <input type="text" name="nom"><br>
        Cognom : <input type="text" name="cognom"><br>
        <input type="submit" value="Envia">
    </form>

</body>
</html>