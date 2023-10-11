<?php

class Player
{
    public string $name;
    public int $coins;

    /**
     * Game constructor.
     * @param string $player1
     * @param int $player2
     */

    public function __construct($name, $coins)
    {
        $this->name = $name;
        $this->coins = $coins;
    }
}