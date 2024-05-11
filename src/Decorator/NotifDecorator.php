<?php
namespace EsgiIw\TpDesignPattern\Decorator;

class NotifDecorator extends EventDecorator {
    public function execute() {
        parent::execute();
        echo "Envoie de la notification à...\n";
    }
}