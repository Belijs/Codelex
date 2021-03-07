<?php

class Application
{
    function run(VideoStore $videostore): void
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->addMovies($videostore);
                    break;
                case 2:
                    $this->rentVideo($videostore);
                    break;
                case 3:
                    $this->returnVideo($videostore);
                    break;
                case 4:
                    $this->listInventory($videostore);
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function addMovies($videostore)
    {
        $videostore->addVideo(new Video(readline('Enter [title] to ADD a movie: ')));
    }

    private function rentVideo($videostore)
    {
        $videostore->checkOut(readline('Enter [title] to RENT a movie: '));
    }

    private function returnVideo($videostore)
    {
        $videostore->returnVideo(readline('Enter [title] to RETURN a movie: '));

    }

    private function listInventory($videostore)
    {
        $videostore->printInventory();
    }
}