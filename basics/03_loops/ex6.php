<?php
// Write a console program in a class named AsciiFigure that draws a figure of the following form, using for loops.

$rows = 5;
$leftSide = '////';
$rightSide = '\\\\\\';
$stars = '********';

    for ($i = 0; $i < $rows-1; $i++){
        for ($j = 0; $j < $rows-$i-1; $j++ ){
            echo $leftSide;
        }
        for ($j = 0; $j < $i; $j++) {
            echo $stars;
        }
        for ($j = 0; $j < $rows - $i - 1; $j++) {
            echo $rightSide;
        }
        echo PHP_EOL;
    }
echo str_repeat('********', $rows - 1) . PHP_EOL;
