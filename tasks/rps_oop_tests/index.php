<?php

require_once 'vendor/autoload.php';

use App\Game;

$game = new Game();

$playerChoice = $game->getElementOptions()->getElement();
$computerChoice = $playerChoice[rand(0, 2)];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $madeChoice = substr(key($_POST), 0, strpos(key($_POST), '_'));

    foreach ($game->getElementOptions()->getElement() as $element) {
        if ($element->getName() === $madeChoice) {
            $game->setCombination($element, $computerChoice);
        }
    }
    $gameResult = $game->detectWinner();
    require_once 'public/ResultView.php';
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') { // button back
    require_once 'public/HomeView.php';
}