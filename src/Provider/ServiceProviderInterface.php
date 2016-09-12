<?php

namespace FelipeBastosWeb\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface as ProviderInterface;

use Silex\Application;
use Silex\Api\BootableProviderInterface;

interface ServiceProviderInterface extends ProviderInterface, BootableProviderInterface {

    public function register(Container $container);
    
    public function boot(Application $app);

}
