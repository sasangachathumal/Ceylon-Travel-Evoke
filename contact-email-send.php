<?php
/**
 * Created by PhpStorm.
 * User: SMSC
 * Date: 11/15/2017
 * Time: 10:29 AM
 */
use \google\appengine\api\mail\Message;

if(empty($_POST['Name']) || empty($_POST['Email']) || empty($_POST['Phone']) || empty($_POST['message'])){
    $name = 'no name';
    $email = 'no email';
    $university = 'no uni';
    $messageBody = 'no message body';
    echo "error";
}
else {
    //Catch the values
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $messageBody = $_POST['message'];

    $myMessage = '<html><body style="color: #ba4216;"><h4>Name : '.$name.'</h4><br><h4>Email : '.$email.'</h4><br><h4>University : '.$university.'</h4><br><h4>Message : '.$messageBody.'</h4></body></html>';

    try {
        $message = new Message();
        $message->setSender('sasanga.dev@gmail.com');
        $message->addTo('chathumal.sasanga02@gmail.com');
        $message->setSubject('Gradchat contact us');
        $message->setHtmlBody($myMessage);
        $message->send();
        echo 'success';
    } catch (InvalidArgumentException $e) {
        echo 'error';
    }
}
?>