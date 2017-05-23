<?php

$message = new Swift_Message($POST['objet'])
  ->setFrom([$POST['email'] => $POST['prenom'].' '.$POST['nom']])
  ->setTo(['lapostolle.jean@gmail.com' => 'Jean Lapostolle'])
  ->setBody($POST['message'])
  ;

$result = $mailer->send($message);
