<?php
// HANGMAN

$words = ['cat', 'otorhinolaryngologist'];
$word = str_split($words[rand(0, count($words) - 1)]);
$wordNow = array_fill(0, count($word), '_');

$usedLetters = [];
$maxMisses = 5;

while (true) {

    echo 'Word: ' . implode(' ', $wordNow) . PHP_EOL;
    echo 'Wrong letters: ' . implode(' ', $usedLetters) . PHP_EOL;
    echo 'Turns left: ' . $maxMisses . PHP_EOL;

    if ($maxMisses === 0) {
        exit ('Woops... You LOST!') . PHP_EOL;
    }
    if (!in_array('_', $wordNow)) {
        exit ('Wow! You WON!') . PHP_EOL;
    }

    $letter = readline('Type your letter >> ');
    echo PHP_EOL;

    if (!in_array($letter, $word) && !in_array($letter, $usedLetters)) {
        $usedLetters[] = $letter;
        $maxMisses--;
    } else {
        foreach ($word as $key => $value) {
            if ($letter === $value) {
                $wordNow[$key] = $letter;
            }
        }
    }
}