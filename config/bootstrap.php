<?php

use Silex\Provider\ServiceControllerServiceProvider;
use FelipeBastosWeb\Provider\ArangoServiceProvider;

use Silex\Provider\MonologServiceProvider;


$app = new Silex\Application;

//$app['twig.path'] = array(__DIR__.'/../templates');
//$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');

$app['debug'] = true;



$app->register(new ServiceControllerServiceProvider());

$app->register(new ArangoServiceProvider());


$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../var/logs/silex_dev.log',
));
