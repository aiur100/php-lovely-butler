<?php

require __DIR__ . '/vendor/autoload.php';

/*
 * Logging to be used later -- chill
 *
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('logs/app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');
*/

$Butler = new Butler();

$Butler->say(Message::getTime());

//$someInput = UserInput::getInput("Give me Input");

$Butler->say(Message::getCurrentTemp());
$Butler->say(Message::getWeekForecast());

