<?php
// The class Movie is started below. An instance of class Movie represents a film.

class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getPG(): bool
    {
        return $this->rating === 'PG';
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}

$movies = [
    new Movie('Casino Royal', 'Eon Productions', 'PG13'),
    new Movie('Glass', 'Buena Vista International', 'PG'),
    new Movie('Spider-Man', 'Columbia Pictures', 'PG')
];

foreach ($movies as $movie) {
    if ($movie->getPG()) {
        echo $movie->getTitle() . PHP_EOL;
    }
}