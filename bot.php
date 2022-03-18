<?php 

use Discord\Discord;
use Discord\WebSockets\Intents;
use Discord\WebSockets\Event;

// Imports used to send a random quote, or random image using an API, or something else
// Author: @gutoso on github!

require_once('./vendor/autoload.php');
require_once('./key.php');
$key = getKey();

$discord = new Discord(['token' => $key]);
$discord -> on('ready', function(Discord $discord){
    echo 'THE BOT IS ON!';
    
    $discord -> on('message', function ($message, $discord) {
        echo "{$message -> author -> username}:{$message -> content}", PHP_EOL;
    });
});

$discord -> run();

?>