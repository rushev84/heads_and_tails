<?php

class Game
{
    protected Player $player1;
    protected Player $player2;

    /**
     * Game constructor.
     * @param Player $player1
     * @param Player $player2
     */

    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function start()
    {
        //
    }
}