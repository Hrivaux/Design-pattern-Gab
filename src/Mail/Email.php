<?php   

namespace EsgiIw\TpDesignPattern\Mail;

class Email {

  private $recipients;
  private $subject;
  private $message;


  public function __construct($recipients, $copies = [], $subject = "", $message = "", $attachments = []) {
    $this->recipients = $recipients;
    $this->subject = $subject;
    $this->message = $message;

  }


  public function send() {
    echo "Email avec les détails suivants : \n";
    echo "Destinataires: " . implode(', ', $this->recipients) . "\n";
    echo "Sujet: " . $this->subject . "\n";
    echo "Message: " . $this->message . "\n";
  }
}