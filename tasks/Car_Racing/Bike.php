<?php

class Bike implements ParticipantInterface
{
    private string $name;
    private int $maxSpeed;

    public function __construct(string $name, int $maxSpeed)
    {
        $this->name = $name;
        $this->maxSpeed = $maxSpeed;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function move(): int
    {
        return rand(0, $this->maxSpeed);
    }
}