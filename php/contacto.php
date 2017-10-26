<?php
      if (isset($_POST["enviar"])) {
       $nombre = $_POST["name"];
       $email = $_POST["email"];
       $mensaje = $_POST["message"];
       $para = "johany87@gmail.com";
       $headers = "From: " .$email;
       $headers .= " X-Mailer: PHP5\n";
       $headers .= ' MIME-Version: 1.0' . "\n";
       $headers .= ' Content-type: text/html; charset=iso-8859-1' . "\r\n";
       $msjcorreo = "Nombre: $name\n e-mail: $email\n Mensaje: $message";
        if (mail($para, $msjcorreo, $headers)) {
         echo "<script type='text/javascript'>
         alert('Mensaje enviado correctamente');
         </script>";
        }else {
         echo "<script type='text/javascript'>
         alert('Problemas al enviar, intentenuevamente');
         </script>";
        }
      }
?>
