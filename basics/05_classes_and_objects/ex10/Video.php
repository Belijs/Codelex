<?php

class Video
{
    public string $title;
    public array $rating = [];
    public bool $check = false;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function returning(): void
    {
        $this->check = false;
    }

    public function renting(): void
    {
        $this->check = true;
    }

    public function rate($rating): void
    {
        $this->rating[] = $rating;
    }

    public function checking(): string
    {
        if ($this->check === false) {
            return 'Available' . PHP_EOL;
        }
        return 'Out of stock' . PHP_EOL;
    }

    public function calculateRating(): float
    {
        if (count($this->rating) !== 0) {
            return array_sum($this->rating) / count($this->rating);
        }
        return 0;
    }
}