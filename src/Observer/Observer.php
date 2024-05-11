<?php

namespace EsgiIw\TpDesignPattern\Observer;

class Observer implements ObserverInterface {
    public function update() {
        echo "L'événement a été modifié...\n";
    }
}