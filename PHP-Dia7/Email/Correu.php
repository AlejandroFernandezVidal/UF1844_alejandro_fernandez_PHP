<!--Alejandro Fernández Vidal-->
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

    class Correu{
        private $email="";

        public function __construct(){
            $this->email=new PHPMailer(true);
            $this->email->SMTPDebug = false;
            $this->email->isSMTP();
            $this->email->Host = 'smtp.gmail.com';
            $this->email->SMTPAuth = true;
            $this->email->Username = 'alexfervid1@gmail.com';
            $this->email->Password = 'rplacawrawxbqilc';
            $this->email->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $this->email->Port = 465;

            $this->email->setFrom('alexfervid1@gmail.com', 'Alejandro Fernandez Vidal');

            $this->email->isHTML(true);

        }

        //accedemos al método send() de la clase PHPMailer para enviar nuestro email
        public function enviar(){
            $this->email->send();
        }

        //añadimos destinatario a nuestro email accediendo al método addAddress() de la clase PHPMailer
        public function setDesti($email){
            $this->email->addAddress($email);
        }

        //funcion para modificar asunto de nuestro email accedemos mediante el atributo Subject de la clase PHPMailer
        public function setAsunte($text){
            $this->email->Subject=$text;
        }

        //funcion para modificar el cuerpo de nuestro email accedemos mediante el atributo Body de la clase PHPMailer
        public function setBody($text){
            $this->email->Body=$text;
        }
    }
?>