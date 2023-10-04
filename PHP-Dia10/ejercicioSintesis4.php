<?php
    ini_set("display_errors", 1);
    
    //Iniciar
    session_start();

    //User y password maestro
    $correctUser="alejandro";
    $correctPassword=1234;
    
    //Obtenemos los campos correspondientes a usuario y contraseña
    $user=@$_POST['user'];
    $password=@$_POST['password'];

    //Comprobamos si usuario y contraseña son corretos
    if($user==$correctUser && $password==$correctPassword){
        @$_SESSION["iniciada"]=true;
        $resultado = "<br><br>sessió iniciada";
    }elseif($user!="" && $password!="") {
        $resultado = "<br><br>con el usuario y la contraseña indicada no se puede iniciar sesión";
    }
?>
<html>
<head>
    <title>PHP - Ejercicio Sintesis 4</title>
</head>
<body>
    <h1>Práctica 4 - Ejercicio Sintesis 4</h1>
    <?php if(!@$_SESSION["iniciada"]){?>
    <form name="formulario" action="ejercicioSintesis4.php" method="post">
        <h1>Formulario</h1>
        <label for="user">Usuario : </label><input name="user" type="text">
        <br>
        <br>
        <label for="password">Password : </label><input name="password" type="text">
        <br>
        <br>
        <button type="submit" value="Submit">Iniciar</button>
    </form>
    <?php }?>
    
    <a href="?valor=A">Opción A</a><br>
    <a href="?valor=B">Opción B</a><br>
    <a href="?valor=C">Opción C</a><br>
    <a href="?tancar=true">Tancar</a><br> 
   
    <?php 

    echo @$resultado;
    if(@$_SESSION["iniciada"]==true){
        if(@$_REQUEST["tancar"]==true){
            //Tancar
            session_unset();
            session_destroy();
            echo "<br><br>sessió tancada";
            header("location:ejercicioSintesis4.php");
        }    
        
        if(@$_REQUEST["valor"]=="A"){
            //OpciónA
            echo "<div style=\"width: 100px; height: 100px;background-color:red\"></div>";
        }
        
        if(@$_REQUEST["valor"]=="B"){
            //OpciónB
            echo "<div style=\"width: 100px; height: 100px;background-color:green\"></div>";
        }
    
        if(@$_REQUEST["valor"]=="C"){
            //OpciónC
            echo "<div style=\"width: 100px; height: 100px;background-color:blue\"></div>";
        }
    }

    ?>
</body>
</html>