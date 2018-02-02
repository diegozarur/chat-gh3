<?php
$pdo->prepare("SELECT * FROM articles");

 // This is our new stuff
    $context = new ZMQContext();
    $socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'diego');
    $socket->connect("tcp://localhost:8080");

    $socket->send(json_encode($pdo));