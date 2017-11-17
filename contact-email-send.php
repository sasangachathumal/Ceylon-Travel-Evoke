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

    $myMessage = '<!DOCTYPE html><html><head><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css"></head><body><div class="container-fluid"><div class="jumbotron" style="margin-bottom: 0"><h1>Ceylon Travel Evoke</h1><h3>Customer Contact Service</h3><h4>Please contact this customer as soon as possible.</h4></div><div class="jumbotron"><table><tr><td class="col-md-6"><h3>Customer Name</h3></td><td>'.$name.'</td></tr><tr><td class="col-md-6"><h3>Customer Email</h3></td><td>'.$email.'</td></tr><tr><td class="col-md-6"><h3>Customer Phone</h3></td><td>'.$phone.'</td></tr><tr><td class="col-md-6"><h3>Customer Message</h3></td><td>'.$messageBody.'</td></tr></table></div></div></body></html>';

    try {
        $message = new Message();
        $message->setSender('contact@ceylontravelevoke.appspotmail.com');
        $message->addTo('rangikamadu.dl27@gmail.com');
        $message->setSubject('Ceylon Travel Evoke contact us');
        $message->setHtmlBody($myMessage);
        $message->send();

        $message = new Message();
        $message->setSender('contact@ceylontravelevoke.appspotmail.com');
        $message->addTo('hasitharanjana@gmail.com');
        $message->setSubject('Ceylon Travel Evoke contact us');
        $message->setHtmlBody($myMessage);
        $message->send();

        echo 'success';
    } catch (InvalidArgumentException $e) {
        echo 'error';
    }
}
?>