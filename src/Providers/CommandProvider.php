<?php
/**
 * Created by PhpStorm.
 * User: weinan
 * Date: 2018/11/15
 * Time: 22:57
 */
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