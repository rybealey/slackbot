<?php

    require __DIR__ . "/vendor/autoload.php";
    require __DIR__ . "/slack.php";

    $botman->hear("/chusername {dsid} {current} {new} {reason}", function($bot, $dsid, $current, $new, $reason){
        $bot->reply("I have logged $dsid's username change from $current to $new for the reason of $reason and have timestamped the interaction in the database.");
    });