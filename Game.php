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

    public function getWinner(): Player
    {
        if ($this->player1->coins > $this->player2->coins) {
            return $this->player1;
        } else {
            return $this->player2;
        }
    }

    public function start(): void
    {
        while (true) {
            $flip = rand(0, 1) ? "heads" : "tails";
            if ($flip === "heads") {
                $this->player1->coins++;
                $this->player2->coins--;
            } else {
                $this->player1->coins--;
                $this->player2->coins++;
            }
            if ($this->player1->coins === 0 || $this->player2->coins === 0) {
                $this->end();
                break;
            }
        }
    }

    public function end(): void
    {
        echo <<<EOT
            Game over.
            
            The winner is {$this->getWinner()->name}.
            
        EOT;
    }
}