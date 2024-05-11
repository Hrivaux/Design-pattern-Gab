<?php

namespace EsgiIw\TpDesignPattern\Mail;


use EsgiIw\TpDesignPattern\Mail\Email;

class EmailBuilder {

  private $recipients;

  private $subject;
  private $message;

  public function __construct($recipients) {
    $this->recipients = $recipients;
  }

 

  public function withSubject($subject) {
    $this->subject = $subject;
    return $this;
  }

  public function withMessage($message) {
    $this->message = $message;
    return $this;
  }



  public function build() {
    return new Email(
      $this->recipients,
      $this->subject,
      $this->message,
    );
  }
}
