#!/usr/bin/env php
<?php

require __DIR__.'/../vendor/autoload.php';

use Pimple\Psr11\Container;
use App\Providers\CommandProvider;
use Symfony\Component\Console\Application;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Console\CommandLoader\ContainerCommandLoader;

$application = new Application();
$application->setDispatcher(new EventDispatcher());

$pimple = new Pimple\Container();
$pimple->register(new CommandProvider());

$commandMap = require(__DIR__.'/../src/CommandMap.php');
$application->setCommandLoader(new ContainerCommandLoader(new Container($pimple), $commandMap));

$application->run();