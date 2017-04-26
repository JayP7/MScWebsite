<?php

$view = new stdClass();
$view->pageTitle = 'Contact Us';

//$view->result = '';
//require_once('Models/Email.php');

//if (isset($_POST['submit'])) {
  //  $email = new Email ($_POST['recipient'], $_POST['subject'], $_POST['mailbody']);
    //if ($email->sendmail()) {
      //  $view->result = "Email sent.";
   // } 
   // else {
     //   $view->result = "Email sent FAILED.";
   // }
//}

require_once('Views/contact.phtml');