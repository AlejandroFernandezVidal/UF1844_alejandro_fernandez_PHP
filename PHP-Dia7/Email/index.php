<!--Alejandro Fernández Vidal-->
<html>
<head>
    <title>PHP Dia7 - Ejercicio</title>
</head>
<body>
    <h1>Pràctica 1 - ejercicio</h1>
    <?php 
    ini_set("display_errors", 1);
    
    include("Correu.php");
    
    //obtenemos valores del formuario en variables para añadir en atributos de la clase Correu
    $para=@$_POST['para'];
    $asunto=@$_POST['asunto'];
    $body=@$_POST['body'];

    //funcion para validar campos cumplimentados
    function validarCamposFormulario($para, $asunto, $body){
        if($para=="" || $asunto=="" || $body==""){
            throw new Exception("Hay que cumplimentar todos los campos");
        }
    }

    try{
        validarCamposFormulario($para,$asunto,$body);
        //instanciamos objeto de la clase Correu
        $email=new Correu();

        //modificamos con las variables obtenidas el email(objeto clase Correu)
        $email->setDesti($para);
        $email->setAsunte($asunto);
        $email->setBody($body);

        //enviamos email y confirmamos con mensaje
        $email->enviar();
        echo 'Message has been sent';


    } catch (Exception $e){
        //informamos del error
        echo "<h3>Error</h3>";
        echo "<p>S'ha produit un error : ".$e->getMessage()."</p>";
    }

    ?>
</body>
</html>