<?php

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailContr {
    //parametri
    private $name;
    private $email;
    private $phone;
    private $subject;
    private $message;

    //konstruktor
    public function __construct($name, $email, $phone,$subject,$message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->message = $message;

    }


    //Pozivanje funkcije za slanjemail-a uz prethodnu aktivaciju error handlera
    public function sendingMail() 
    {
        if (!$this->emtpyInput()) {
            header('location:../contact.php?error=emptyinput');
            exit;
        }
        if (!$this->invalidEmail()) {
            header('location:../contact.php?error=invalidemail');
            exit;
        }
        if (!$this->invalidName()) {
            header('location:../contact.php?error=invalidname');
            exit;
        }

        $completeMessage = "From: " . $this->name . ", <br> E-mail: " . $this->email. ", <br> Phone: " . $this->phone . ", <br> Message: <br>" . $this->message;

        $mail1 = new PHPMailer();
        $mail1->isSMTP();
        $mail1->SMTPAuth = true;
        $mail1->SMTPSecure = 'ssl';
        $mail1->Host = 'smtp.gmail.com';
        $mail1->Port = '465';
        $mail1->isHTML();
        $mail1->Username = 'receptipovasojmeri@gmail.com';
        $mail1->Password = 'recepti321';
        $mail1->setFrom($this->email,$this->name);
        $mail1->Subject = $this->subject;
        $mail1->Body = $completeMessage;
        $mail1->addAddress('gordic00@gmail.com');

        $mail1->send();
 
    }



    //error handler-i
    private function emtpyInput()
    {
        $result = false;
        if (empty($this->name) || empty($this->email) || empty($this->phone) || empty($this->subject) || empty($this->message)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidName() 
    {
        $result = false;
        if (!preg_match("/^[a-zA-Z\s]*$/", $this->name)) {
            $result = false;
        } else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail ()
    {
        $result = false;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else{
            $result = true;
        }
        return $result;
    }


}