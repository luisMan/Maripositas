<?php

      $result="";
      $errName="";
      $errEmail="";
      $errMessage="";
      $errHuman="";
    if (isset($_POST["submit"])) {
        $name = $_POST['InputName'];
        $email = $_POST['InputEmail'];
        $message = $_POST['InputMessage'];
        $human = intval($_POST['InputReal']);
        $from = 'Payasita Mariposa Contact Form'; 
        $to = 'luisman1989@gmail.com'; 
        $subject = 'Message from Payasita Mariposa Contact Form ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['InputName']) {
            $errName = 'Por favor entra tu nombre';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['InputEmail'] || !filter_var($_POST['InputEmail'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Por favor entrar un email address correcto';
        }
        
        //Check if message has been entered
        if (!$_POST['InputMessage']) {
            $errMessage = 'Por favor entrar tu mensage';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 7) {
            $errHuman = 'Tu respuesta de number es incorrecta';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! Estare en contacto con tigo gracias!</div>';
    } else {
        $result='<div class="alert alert-danger">Lo sentimos a occurido un error enviando tu mensagem intentalo de nuevo!!.</div>';
    }
}
    }
?>