<?php
namespace App;

class Paper implements Element
{
    private string $name = 'paper';

    public function getName(): string
    {
        return $this->name;
    }

    public function wins(Element $computer): bool
    {
        return $computer->getName() == 'rock';
    }
}