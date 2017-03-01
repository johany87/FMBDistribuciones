<?php
      if (isset($_POST["submit"])) {
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];
            $tema = $_POST["tema"];
            $mensaje = $_POST["mensaje"];
            $para = "johany87@gmail.com"
            $titulo = "WEB CONTACT";
            $header = "From: " . $email;
            $msjcorreo = "Nombre: $nombre\n e-mail: $email\n Mensaje: $mensaje";
            if ($nombre == "") {
                  echo "Debe ingresar el nombre";
            }elseif ($email == "") {
                  echo "Debe ingresar email";
            }
      }
 ?>
