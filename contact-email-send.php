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

    $myMessage = '<!DOCTYPE html><html><head><style type="text/css">.container-fluid {padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;}.clearfix:before, .clearfix:after, .dl-horizontal dd:before, .dl-horizontal dd:after, .container:before, .container:after, .container-fluid:before, .container-fluid:after, .row:before, .row:after, .form-horizontal .form-group:before, .form-horizontal .form-group:after, .btn-toolbar:before, .btn-toolbar:after, .btn-group-vertical > .btn-group:before, .btn-group-vertical > .btn-group:after, .nav:before, .nav:after, .navbar:before, .navbar:after, .navbar-header:before, .navbar-header:after, .navbar-collapse:before, .navbar-collapse:after, .pager:before, .pager:after, .panel-body:before, .panel-body:after, .modal-footer:before, .modal-footer:after {display: table;content: " ";}.clearfix:after, .dl-horizontal dd:after, .container:after, .container-fluid:after, .row:after, .form-horizontal .form-group:after, .btn-toolbar:after, .btn-group-vertical > .btn-group:after, .nav:after, .navbar:after, .navbar-header:after, .navbar-collapse:after, .pager:after, .panel-body:after, .modal-footer:after {clear: both;}.jumbotron {padding: 30px 15px;margin-bottom: 30px;color: inherit;background-color: #eee;}.jumbotron h1, .jumbotron .h1 {color: inherit;}.jumbotron p {margin-bottom: 15px;font-size: 21px;font-weight: 200;}.jumbotron > hr {border-top-color: #d5d5d5;}.container .jumbotron, .container-fluid .jumbotron {border-radius: 6px;}.jumbotron .container {max-width: 100%;}@media screen and (min-width: 768px) {.jumbotron {padding: 48px 0;}.container .jumbotron, .container-fluid .jumbotron {padding-right: 60px;padding-left: 60px;}.jumbotron h1, .jumbotron .h1 {font-size: 63px;}}.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {position: relative;min-height: 1px;padding-right: 15px;padding-left: 15px;}@media (min-width: 992px) {.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {float: left;}.col-md-12 {width: 100%;}.col-md-11 {width: 91.66666667%;}.col-md-10 {width: 83.33333333%;}.col-md-9 {width: 75%;}.col-md-8 {width: 66.66666667%;}.col-md-7 {width: 58.33333333%;}.col-md-6 {width: 50%;}.col-md-5 {width: 41.66666667%;}.col-md-4 {width: 33.33333333%;}.col-md-3 {width: 25%;}.col-md-2 {width: 16.66666667%;}.col-md-1 {width: 8.33333333%;}.col-md-pull-12 {right: 100%;}.col-md-pull-11 {right: 91.66666667%;}.col-md-pull-10 {right: 83.33333333%;}.col-md-pull-9 {right: 75%;}.col-md-pull-8 {right: 66.66666667%;}.col-md-pull-7 {right: 58.33333333%;}.col-md-pull-6 {right: 50%;}.col-md-pull-5 {right: 41.66666667%;}.col-md-pull-4 {right: 33.33333333%;}.col-md-pull-3 {right: 25%;}.col-md-pull-2 {right: 16.66666667%;}.col-md-pull-1 {right: 8.33333333%;}.col-md-pull-0 {right: auto;}.col-md-push-12 {left: 100%;}.col-md-push-11 {left: 91.66666667%;}.col-md-push-10 {left: 83.33333333%;}.col-md-push-9 {left: 75%;}.col-md-push-8 {left: 66.66666667%;}.col-md-push-7 {left: 58.33333333%;}.col-md-push-6 {left: 50%;}.col-md-push-5 {left: 41.66666667%;}.col-md-push-4 {left: 33.33333333%;}.col-md-push-3 {left: 25%;}.col-md-push-2 {left: 16.66666667%;}.col-md-push-1 {left: 8.33333333%;}.col-md-push-0 {left: auto;}.col-md-offset-12 {margin-left: 100%;}.col-md-offset-11 {margin-left: 91.66666667%;}.col-md-offset-10 {margin-left: 83.33333333%;}.col-md-offset-9 {margin-left: 75%;}.col-md-offset-8 {margin-left: 66.66666667%;}.col-md-offset-7 {margin-left: 58.33333333%;}.col-md-offset-6 {margin-left: 50%;}.col-md-offset-5 {margin-left: 41.66666667%;}.col-md-offset-4 {margin-left: 33.33333333%;}.col-md-offset-3 {margin-left: 25%;}.col-md-offset-2 {margin-left: 16.66666667%;}.col-md-offset-1 {margin-left: 8.33333333%;}.col-md-offset-0 {margin-left: 0;}}</style></head><body><div class="container-fluid"><div class="jumbotron" style="margin-bottom: 0"><h1>Ceylon Travel Evoke</h1><h3>Customer Contact Service</h3><h4>Please contact this customer as soon as possible.</h4></div><div class="jumbotron"><table><tr><td class="col-md-6"><h3>Customer Name</h3></td><td>'.$name.'</td></tr><tr><td class="col-md-6"><h3>Customer Email</h3></td><td>'.$email.'</td></tr><tr><td class="col-md-6"><h3>Customer Phone</h3></td><td>'.$phone.'</td></tr><tr><td class="col-md-6"><h3>Customer Message</h3></td><td>'.$messageBody.'</td></tr></table></div></div></body></html>';

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