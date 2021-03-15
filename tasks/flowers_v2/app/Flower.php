<?php

class Flower implements Sellable
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function id(): string
    {
        return 'UPC' . $this->name;
    }
}