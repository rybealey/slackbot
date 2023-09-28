<?php

    use BotMan\BotMan\BotMan;
    use BotMan\BotMan\BotManFactory;
    use BotMan\BotMan\Drivers\DriverManager;
    DriverManager::loadDriver(\BotMan\Drivers\Slack\SlackDriver::class);

    // Create the Slackbot instance.
    $config = [
        "slack" => [
                "token" => "HBlBQcG3axoPyIDOMMjBCUYF"
            ]
        ];

    $botman = BotManFactory::create($config);