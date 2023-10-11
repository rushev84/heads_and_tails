<?php

class Game
{
    protected Player $player1;
    protected Player $player2;
    protected int $flips = 1;

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

    public function getWinner(): Player
    {
        return $this->player1->getBank() > $this->player2->getBank() ? $this->player1 : $this->player2;
    }

    public function flip(): string
    {
        return rand(0, 1) ? "heads" : "tails";
    }

    public function start(): void
    {
        $player1chances = $this->player1->getBank() / ($this->player1->getBank() + $this->player2->getBank()) * 100 . "%";
        $player2chances = $this->player2->getBank() / ($this->player2->getBank() + $this->player1->getBank()) * 100 . "%";

        echo <<<EOT
            The chances:
            {$this->player1->name}: $player1chances
            {$this->player2->name}: $player2chances
            
            
        EOT;

        $this->play();
    }

    public function play(): void
    {
        while (true) {
            if ($this->flip() === "heads") {
                $this->player1->point($this->player2);
            } else {
                $this->player2->point($this->player1);
            }
            if ($this->player1->isBankrupt() || $this->player2->isBankrupt()) {
                $this->end();
                break;
            }
            $this->flips++;
        }
    }

    public function end(): void
    {
        echo <<<EOT
            Game over.
            
            The winner is {$this->getWinner()->name}.
            
            The number of tosses: {$this->flips}.
            
            The number of coins:
            {$this->player1->name}: {$this->player1->getBank()}
            {$this->player2->name}: {$this->player2->getBank()}
            
        EOT;
    }
}