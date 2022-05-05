<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;
    
    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    //funcion para enviar el correo que dara de alta a los nuevos agentes y vendedores
    public function enviarConfirmacion() {

        //crear una instancia de PHPMailer
        $mail = new PHPMailer();

        //Configurando SMTP
       $mail->isSMTP();
       $mail->Host='smtp.gmail.com';
       $mail->SMTPAuth= true;
       $mail->Username=$_ENV['EMAIL_USER'];
       $mail->Password=$_ENV['EMAIL_PASSWORD'];
       $mail->SMTPSecure='tls';
       $mail->Port='587';

       //configurando el contenido  del Email
       //quien lo envia
       $mail->setFrom($_ENV['EMAIL_USER']);
       //A donde va
        $mail->addAddress($this->email);
        $mail->Subject='Confirma tu cuenta';
        //habilitar html
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
         $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> tu cuenta ha sido creada en el Sistema inmobiliario, solo debes confirmarla presionando el siguiente enlace</p>";
         $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";        
         $contenido .= "<p>Si tu no solicitaste este registro, puedes ignorar el mensaje</p>";
         $contenido .= '</html>';
         $mail->Body = $contenido;

         $mail->Body = $contenido;
         $mail->AltBody = "texto alternativo";

         //Enviar el mail
         $mail->send();

    }

    //funcion para enviar el correo que enviara las instrucciones para reestablecer la contraseña
    public function enviarInstrucciones() {

        //crear una instancia de PHPMailer
       $mail = new PHPMailer();

       //Configurando SMTP
       $mail->isSMTP();
       $mail->Host='smtp.gmail.com';
       $mail->SMTPAuth= true;
       $mail->Username=$_ENV['EMAIL_USER'];
       $mail->Password=$_ENV['EMAIL_PASSWORD'];
       $mail->SMTPSecure='tls';
       $mail->Port='587';

       //configurando el contenido  del Email
       //quien lo envia
       $mail->setFrom($_ENV['EMAIL_USER']);
       //A donde va
       $mail->addAddress($this->email);
       $mail->Subject='Reestablece tu password';
       //habilitar html
       $mail->isHTML(true);
       $mail->CharSet = 'UTF-8';

       $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'>Reestablecer password</a>";        
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

        $mail->Body = $contenido;
        $mail->AltBody = "texto alternativo";

        //Enviar el mail
        $mail->send();
   }
   
   //funcion para enviar el correo que escribiran en la pagina de /contacto
   public function emailContacto($respuestas){
       //crear una instancia de PHPMailer
       $mail = new PHPMailer();

       //Configurando SMTP
       $mail->isSMTP();
       $mail->Host='smtp.gmail.com';
       $mail->SMTPAuth= true;
       $mail->Username=$_ENV['EMAIL_USER'];
       $mail->Password=$_ENV['EMAIL_PASSWORD'];
       $mail->SMTPSecure='tls';
       $mail->Port='587';

       //configurando el contenido  del Email
       //quien lo envia
       $mail->setFrom('Sistema inmobiliario');
       //A donde va
       $mail->addAddress($_ENV['EMAIL_USER']);
       $mail->Subject='Tienes un nuevo mensaje';
       //habilitar html
       $mail->isHTML(true);
       $mail->CharSet = 'UTF-8';

       //definir el contenido
       $contenido = '<html>';
       $contenido .= '<p>Tienes un nuevo mensaje</p>';
       $contenido .= '<p>Nombre:'. $respuestas['nombre'] . '</p>';
       
       //enviar de forma condicional algunos campos
       if($respuestas['empresa']!=""){
           $contenido .= '<p>De la empresa: '.$respuestas['empresa'].'</p>';
           $contenido .= '<p>Con el puesto de: '.$respuestas['puesto'].'</p>';
       }
       $contenido .= '<p>Esta interesado en adquirir '.$respuestas['asunto'].'</p>';
       $contenido .= '<p>Medios de contacto proporcionados</p>';
       $contenido .= '<p>Email: '.$respuestas['correo'].'</p>';
       $contenido .= '<p>Whatsapp: '.$respuestas['telefono'].'</p>';
       
       $contenido .= '<p>Mensaje:</p>';
       $contenido .= $respuestas['mensaje'];
       
       $contenido .= '</html>';

       $mail->Body = $contenido;
       $mail->AltBody = "texto alternativo";

       if($mail->send()){
           $mensaje= "mensaje enviado";
       }
       else{
           $mensaje = "mensaje no enivado";
       }

       return $mensaje;
   }

}