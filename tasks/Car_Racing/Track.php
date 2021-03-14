<?php

class Track
{
    public CarCollection $cars;
    private int $length;
    private array $track = [];
    private array $place = [];

    public function __construct(int $length, CarCollection $cars)
    {
        $this->length = $length;
        $this->cars = $cars;
    }

    public function getLength(): int
    {
        return $this->length;
    }
    public function getTrack(): array
    {
        return $this->track;
    }
    public function getPlace(): array
    {
        return $this->place;
    }

    public function build(): string
    {
        return str_repeat('*', $this->length);
    }

    public function positions(int $racer): int
    {
        return strpos($this->track[$racer], $this->cars->getCars()[$racer]->getName(),1);
    }

    public function finishing($racer): void
    {
        $this->track[$racer] = substr_replace($this->build(), $this->cars->getCars()[$racer]->getName(),-1);
    }

    public function drive(int $racer): void
    {
        $this->track[$racer] = substr_replace($this->build(), $this->cars->getCars()[$racer]->getName(), $this->positions($racer) + $this->cars->getCars()[$racer]->move(),1);
    }

    public function place(string $racer): void
    {
        $this->place[] = $racer;
    }
}