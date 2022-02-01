<?php

if (isset($_POST['submit'])) {

//uzimanje podataka
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

//Instanciranje klase
    include "../classes/mail-contr.classes.php";

    $mail = new MailContr($name,$email,$phone,$subject,$message);
    $mail->sendingMail();

//vracanje na pocetnu
    header("location:../index.php?mail=sent");
    exit();

}
else {
    header('location:../contact.php');
    exit();
}