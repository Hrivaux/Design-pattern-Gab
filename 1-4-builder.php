<?php

use EsgiIw\TpDesignPattern\Mail\EmailBuilder;

require_once 'vendor/autoload.php';

$emailBuilder = new EmailBuilder(['alex@gmail.com', 'tom@gmail.com']);
$email = $emailBuilder
  ->withSubject('Mail important')
  ->withMessage('Ceci est un mail')
  ->build();

$email->send();