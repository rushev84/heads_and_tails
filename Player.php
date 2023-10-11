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

    public function point(Player $opponent): void
    {
        $this->coins++;
        $opponent->coins--;
    }

    public function isBankrupt(): bool
    {
        return $this->coins === 0;
    }

    public function getBank(): int
    {
        return $this->coins;
    }
}