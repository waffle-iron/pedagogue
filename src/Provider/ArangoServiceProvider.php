<?php

namespace FelipeBastosWeb\Provider;

//references:
//https://www.arangodb.com/tutorials/tutorial-php/
//https://github.com/helderjs/ArangoDbSilexServiceProvider
//https://github.com/arangodb/arangodb-php

use Silex\Application;
use Pimple\Container;

use triagens\ArangoDb\Connection;
use triagens\ArangoDb\ConnectionOptions;
use triagens\ArangoDb\UpdatePolicy;

class ArangoServiceProvider implements ServiceProviderInterface {

    public function register(Container $app)
    {
        $app['odm.arangodb.options'] = [
	        ConnectionOptions::OPTION_ENDPOINT => 'tcp://127.0.0.1:8529',
	        ConnectionOptions::OPTION_AUTH_TYPE => 'Basic',
            ConnectionOptions::OPTION_AUTH_USER => 'root',
            ConnectionOptions::OPTION_AUTH_PASSWD => '',
            ConnectionOptions::OPTION_CONNECTION => 'Close',
	        ConnectionOptions::OPTION_TIMEOUT => 3,
	        ConnectionOptions::OPTION_RECONNECT => true,
	        ConnectionOptions::OPTION_UPDATE_POLICY => UpdatePolicy::LAST
	    ];
	
	    $app['odm.arangodb.conn'] = new Connection($app['odm.arangodb.options']);
    }

    public function boot(Application $app)
    {
    
    }

}
