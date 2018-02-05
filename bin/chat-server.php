<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Ratchet\Http\Router;
use Ratchet\MessageComponentInterface;  
use Ratchet\ConnectionInterface;
use MyApp\Chat;




//$server = IoServer::factory(
//    new HttpServer(
//        new WsServer(
//            new Chat()
//        )
//    ),
//    8080
//);


// Run the server application through the WebSocket protocol on port 8080
$app = new Ratchet\App("localhost", 8080, '0.0.0.0');
$app->route('/chat', new Chat, array('*'));

$app->run();