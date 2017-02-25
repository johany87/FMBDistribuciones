<?php
  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];
  $tema = $_POST['tema'];
  $para = 'johany87@gmail.com'
  $titulo = 'WEB CONTACT';
  $header = 'From: ' . $email;
  $msjcorreo = 'Nombre: $nombre\n e-mail: $email\n Mensaje: $mensaje';

  if ($_POST['submit']) {
    if(mail($para, $titulo, $msjcorreo, $header)){
      echo "<script lenguage='javascript'>
        alert('Mensaje enviado correctamente, muchas gracias.');
        </script>";
    }else {
      echo 'El mensaje no fue enviado';
    }
  }
 ?>
