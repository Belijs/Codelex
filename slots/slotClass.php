<?php


class SlotMachine
{
    public array $line1;
    public array $line2;
    public array $line3;
    public int $jackpot = 0;

    public function __construct($line1, $line2, $line3)
    {
        $this->line1 = $line1;
        $this->line2 = $line2;
        $this->line3 = $line3;
        $this->jackpot = 0;
    }

    public function randomElement(): int
    {
        $elements = [1, 2, 3, 4];
        $randomElement = rand($elements);
        return $elements[$randomElement];
    }

    public function seeElements()
    {
        $line1 = [];
        for ($i = 0; $i <= 3; $i++) {
            array_push($line1, $this->randomElement());
        }

        $line2 = [];
        for ($i = 0; $i <= 3; $i++) {
            array_push($line2, $this->randomElement());
        }
        $line3 = [];
        for ($i = 0; $i <= 3; $i++) {
            array_push($line3, $this->randomElement());
        }
    }


    public function winCombos()
    {
        if ($this->line1[0] == $this->line1[1] && $this->line1[1] == $this->line1[2]) {
            return $this->jackpot + 10;
        }
        if ($this->line1[0] == $this->line1[1] && $this->line1[1] == $this->line1[2]) {
            return $this->jackpot + 10;
        }
        if ($this->line1[0] == $this->line1[1] && $this->line1[1] == $this->line1[2]) {
            return $this->jackpot + 10;
        }
    }

    public function seeScreen()
    {

    }
}

class Person
{
    public int $wallet;
    public int $bet;

    public function seeMoney()
    {
        return $this->wallet;
    }

    public function seeBet()
    {
        return $this->bet;
    }
}

