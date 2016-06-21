<?php

require_once '../vendor/autoload.php';

$application = new \Symfony\Component\Console\Application();
$application->add(new \ApiDemo\Command\QueryCommand());
$application->run();
