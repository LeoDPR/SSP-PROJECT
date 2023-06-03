<?php

    if ($_POST) {

        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $comentarios = $_POST['comentarios'];

        $header = 'From: ' . $email . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";

        $message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
        $message .= "Su e-mail es: " . $email . " \r\n";
        $message .= "Teléfono de contacto: " . $telefono . " \r\n";
        $message .= "Asunto: " . $asunto . " \r\n";
        $message .= "Comentarios: ". $comentarios . " \r\n";
        $message .= "Enviado el: " . date('d/m/Y', time());

        $para = 'adan.escamilla@uabc.edu.mx';
        $asunto = 'Mensaje de la página del Cuerpo Academico';

        mail($para, $asunto, utf8_decode($message), $header);
        
        echo "<script>alert('Se te enviaria un correo con respuesta dentro de 2 a 5 dias habiles');</script>";

        header('location: Contacto.php');

    }

?>