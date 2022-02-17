<?php
require('vendor/autoload.php'); 
// load all functions in vendor
//Define Key pusher
define('APP_KEY','8f2c72fd3627f45e0429');
define('APP_SECRET','3e883714df699ad49e41');
define('APP_ID','1348521');
//make object of pusher
$pusher = new Pusher\Pusher(
    APP_KEY,
    APP_SECRET,
    APP_ID,
    [
        'cluster'   =>'ap2',
        'encrypted' => true
    ]
);
$data['message'] = "Hello World , I'm Realtime Notification";
$pusher->trigger('my-channel','my-event',$data);
?>