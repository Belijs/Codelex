<?php

class VideoStore
{
    public array $videos = [];

    public function addVideo(Video $video): void
    {
        $this->videos[] = $video;
    }

    public function checkOut(string $insertTitle)
    {
        foreach ($this->videos as $video) {
            if ($video->title == $insertTitle) {
                $video->renting();
            }
        }
    }

    public function returnVideo(string $insertTitle)
    {
        foreach ($this->videos as $video) {
            if ($video->title === $insertTitle) {
                $video->returning();
            }
        }
    }

    public function rateVideo(string $insertTitle, int $insertRating)
    {
        foreach ($this->videos as $video) {
            if ($video->title = $insertTitle) {
                $video->rate($insertRating);
            }
        }
    }

    public function printInventory()
    {
        foreach ($this->videos as $video) {
            echo 'Movie title: ' . $video->title . ', Movie rating: ' . $video->calculateRating() . '. ' . $video->checking();
        }
    }
}