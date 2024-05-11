<?php
declare(strict_types=1);


use EsgiIw\TpDesignPattern\EventRegistration\EventBDERegistration;
use EsgiIw\TpDesignPattern\EventRegistration\EventSportRegistration;

require_once 'vendor/autoload.php';

$participantBDE = ["John Doe", "Jane Smith", "Alice Johnson"];
$participantSport = ["Tim duck", "Will Smith", "Jul"];


foreach ($participantBDE as $participant) {
    $bdeEventRegistration = new EventBDERegistration($participant);
    $bdeEventRegistration->register();
}


foreach ($participantSport as $participant) {
$sportsEventRegistration = new EventSportRegistration($participant);
$sportsEventRegistration->register();
}