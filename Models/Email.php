<?php

/*require_once 'Models/PhpMailer/class.phpmailer.php';

class Email {
    var $to = '', $subject = '', $body = '';
public function __construct($to, $subject, $body) {
        $this->to = $to;
        $this->subject = $subject;
        $this->body = $body;
}

public function sendmail() {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->Username = "salford.enquiries";
        $mail->Password = "United77";
        $mail->From = "salford.enquiries@gmail.com";
        $mail->FromName = "Salford Enquiries";
        $mail->AddAddress($this->to);
        $mail->WordWrap = 80;
        $mail->IsHTML(true);
        $mail->Subject = $this->subject;
        $mail->Body = $this->body;
        
    if ($mail->Send()) return TRUE;
        else return FALSE;
}
}*/