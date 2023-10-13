<?php

require_once './vendor/autoload.php';

echo "Enter the number of coins for Joe: ";
$coins1 = fgets(STDIN);

echo "Enter the number of coins for Jane: ";
$coins2 = fgets(STDIN);


$game = new Game(
    new Player("Joe", $coins1),
    new Player("Jane", $coins2)
);

$game->start();