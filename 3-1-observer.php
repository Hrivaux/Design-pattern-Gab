<?php

require 'vendor/autoload.php';

use EsgiIw\TpDesignPattern\Observer\Subject;
use EsgiIw\TpDesignPattern\Observer\Observer;

$observer1 = new Observer();
$subject = new Subject();

$subject->attach($observer1);

$subject->modifEvent();