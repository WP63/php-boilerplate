<?php
require __DIR__ . '/vendor/autoload.php';

use Buki\Router;

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

$router = new Router([
  'paths' => [
    'controllers' => 'src/Controllers',
  ],
  'namespaces' => [
    'controllers' => 'App\Controllers',
  ],
]);

$router->get( '/', 'Home@main');

$router->run();
