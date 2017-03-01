<?php
      if (isset($_POST["enviar"])) {
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];
            $tema = $_POST["tema"];
            $mensaje = $_POST["mensaje"];
            $para = "johany87@gmail.com"
            $titulo = "WEB CONTACT";
            $headers = "From: " . $email;
            $headers .= "X-Mailer: PHP5\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
            $msjcorreo = "Nombre: $nombre\n e-mail: $email\n Mensaje: $mensaje";
            if (mail($para, $asunto, $msjcorreo, $headers)) {
                  echo "Mensaje enviado correctamente";
                  echo "<a href='https://calm-lake-89825.herokuapp.com/index.html'></a>";
            }else {
                  echo "Mensaje no enviado, intente luego";
            }
      }
 ?>
