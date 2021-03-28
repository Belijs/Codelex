<?php

namespace App;

class Rock implements Element
{
    private string $name = 'rock';

    public function getName(): string
    {
        return $this->name;
    }

    public function wins(Element $computer): bool
    {
        return ($computer->getName() == 'scissors');
    }


}