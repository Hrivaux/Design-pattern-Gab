<?php

require 'vendor/autoload.php';

use EsgiIw\TpDesignPattern\Decorator\Evenement;
use EsgiIw\TpDesignPattern\Decorator\LogDecorator;

use EsgiIw\TpDesignPattern\Decorator\NotifDecorator;

$event = new Evenement();
$event = new LogDecorator($event);
$event = new NotifDecorator($event);

$event->execute();
