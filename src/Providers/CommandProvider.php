<?php

namespace App\Providers;

use App\Commands\Hello;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class CommandProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple[Hello::class] = new Hello();
    }
}