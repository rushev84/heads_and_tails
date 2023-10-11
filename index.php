<?php

require_once './vendor/autoload.php';

$game = new Game(
    new Player("Joe", 10000),
    new Player("Jane", 100)
);

$game->start();