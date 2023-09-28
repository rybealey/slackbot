<?php

    use BotMan\BotMan\BotMan;
    use BotMan\BotMan\BotManFactory;
    use BotMan\BotMan\Drivers\DriverManager;
    DriverManager::loadDriver(\BotMan\Drivers\Slack\SlackDriver::class);

    // Create the Slackbot instance.
    $config = [
        "slack" => [
                "token" => $_ENV("TOKEN")
            ]
        ];

    $botman = BotManFactory::create($config);