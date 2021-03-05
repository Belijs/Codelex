<?php

$optionsLong = ['papper', 'rock', 'scissors'];
$options = ['p', 'r', 's'];

$userInput = readline('Choose your Power: ');
$pcInput = $options[rand(0, 2)];

if (! in_array($userInput, $options)){
    echo 'Wrong input!';
}

echo $userInput . PHP_EOL;
echo $pcInput . PHP_EOL;

if ($userInput === $pcInput){
    echo 'DRAW!';
}

switch ([$userInput, $pcInput]) {
    case ['p', 'r']:
    case ['r', 's']:
    case ['s', 'p']:
        echo 'WINNER!';
        break;
    case ['r', 'p']:
    case ['p', 's']:
    case ['s', 'r']:
        echo 'LOOSER!';
        break;
}

