<?php

namespace EsgiIw\TpDesignPattern\Decorator;

class Evenement implements EventInterface {
    public function execute() {
        echo "Evenement...\n";
    }
}