<?php
// Write a program that asks the user to enter two words.
// The program then prints out both words on one line.
// The words will be separated by enough dots so that the total line length is 30:

// Enter first word:
// turtle
// Enter second word
// 153
// turtle....................153

// This could be used as part of an index for a book. To print out the dots, use echo "." inside a loop body.

$firstWord = readline('1st Word: ');
$secondWord = readline('2nd Word: ');

$lineLength = 30;

$charSum = strlen($firstWord ) + strlen($secondWord);
$dots = $lineLength - $charSum;

echo $firstWord;
for ($i = 0; $i < $dots; $i++){
    echo '.';
}
echo $secondWord;