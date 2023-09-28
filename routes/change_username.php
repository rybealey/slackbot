<?php

    require "../vendor/autoload.php";
    
    use BotMan\BotMan\BotMan;
    use BotMan\BotMan\BotManFactory;
    use BotMan\BotMan\Drivers\DriverManager;
    DriverManager::loadDriver(\BotMan\Drivers\Slack\SlackDriver::class);

    // Create the Slackbot instance.
    $config = [
        "slack" => [
                "token" => "xoxb-526890004994-5786369407413-F63nkka4f06GYAjJH1eU4nkj"
            ]
        ];

    $botman = BotManFactory::create($config);

    $botman->hears("/chusername {dsid} {current} {new} {reason}", function(BotMan $bot, $dsid, $current, $new, $reason){
        $bot->reply("I have logged $dsid's username change from $current to $new for the reason of $reason and have timestamped the interaction in the database.");
    });