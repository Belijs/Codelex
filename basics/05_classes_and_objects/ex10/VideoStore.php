<?php

class VideoStore
{
    public array $videos = [];

    public function addVideo(Video $video): void
    {
        $this->videos[] = $video;
    }

    public function checkOut(string $insertTitle): void
    {
        foreach ($this->videos as $video) {
            if ($video->title == $insertTitle) {
                $video->renting();
            }
        }
    }

    public function returnVideo(string $insertTitle): void
    {
        foreach ($this->videos as $video) {
            if ($video->title === $insertTitle) {
                $video->returning();
            }
        }
    }

    public function rateVideo(string $insertTitle, int $insertRating): void
    {
        foreach ($this->videos as $video) {
            if ($video->title = $insertTitle) {
                $video->rate($insertRating);
            }
        }
    }

    public function listInventory(): void
    {
        foreach ($this->videos as $video) {
            echo 'Movie title: ' . $video->title . ', Rating: ' . $video->calculateRating() . '. ' . $video->checking();
        }
    }
}