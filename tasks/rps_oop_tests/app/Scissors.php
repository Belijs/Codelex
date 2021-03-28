<?php

namespace App;

class Scissors implements Element
{
    private string $name = 'scissors';


    public function getName(): string
    {
        return $this->name;
    }

    public function wins(Element $computer): bool
    {
        return ($computer->getName() == 'paper');
    }

}