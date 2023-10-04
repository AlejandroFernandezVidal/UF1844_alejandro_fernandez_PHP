<!--Alejandro Fernandez Vidal-->
<?php
ini_set("display_errors", 1);

//importamos la clase Correu
include("Correu.php");

//instancia de la clase Correu 
$email=new Correu();

//añadimos contenido al email Destinatario, Asunto y Contenido del cuerpo
$email->setDesti("alexfervid@gmail.com");
$email->setAsunte("Clase correo");
$email->setBody("Prueba de clase Correo");

//enviamos email
$email->enviar();

?>