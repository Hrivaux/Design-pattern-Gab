<?php
namespace EsgiIw\TpDesignPattern\Decorator;


class LogDecorator extends EventDecorator {
    public function execute() {
        echo "Connexion à...\n";
        parent::execute();
        echo "Connexion à...\n";
    }
}