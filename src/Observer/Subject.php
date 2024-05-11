<?php

namespace EsgiIw\TpDesignPattern\Observer;

class Subject implements SubjectInterface {
    private $observers = [];



    public function detach(ObserverInterface $observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function modifEvent() {
        
        $this->notify();
    }

        public function attach(ObserverInterface $observer) {
        $this->observers[] = $observer;
    }
}