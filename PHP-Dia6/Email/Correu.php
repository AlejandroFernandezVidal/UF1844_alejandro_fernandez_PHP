<!--Alejandro Fernandez Vidal-->
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
            //$this->email->addAddress('alexfervid@gmail.com');
            //$this->email->addReplyTo('info@example.com', 'Information');
            //$this->email->addCC('cc@example.com');

            //$this->email->addAttachment('/tmp/image.jpg', 'new.jpg');

            $this->email->isHTML(true);
            $this->email->Subject = 'Email de prueba clase Correu';
            $this->email->Body = 'Email generado automaticamente';
            //$this->email->AltBody = 'This is the body in plain text for non-HTML mail clients';
        }

        //accedemos al método send() de la clase PHPMailer para enviar nuestro email
        public function enviar(){
            $this->email->send();
            echo "se ha enviado correctamente el email";
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