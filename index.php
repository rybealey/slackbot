<!DOCTYPE HTML>

<?php
    // Loads environmental factors.
    require __DIR__ . "/vendor/autoload.php";
    require "./slack.php";
?>

<html lang="en-us">
    <head>
        <title>Slackbot v0.0.1</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Slackbot v0.0.1 is running!</h1>
        <p>The Slackbot is currently taking requests.</p>
        <p>Token: <?php echo $config[0][0]; ?></p>
    </body>
</html>