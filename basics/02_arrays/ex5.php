<?php
// tic tac toe // - ir gļuki un nepilnības

$board = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-']
];


function printBoard($board)
{
    for ($i = 0; $i < count($board); $i++) {
        echo implode($board[$i]) . PHP_EOL;
    }
}

printBoard($board);

// winning combos
$checkWin = 0;

if ($board[0][0] == 'x' && $board[0][1] == 'x' && $board[0][2] == 'x' || $board[0][0] == 'o' && $board[0][1] == 'o' && $board[0][2] == 'o' ||
    $board[1][0] == 'x' && $board[1][1] == 'x' && $board[1][2] == 'x' || $board[1][0] == 'o' && $board[1][1] == 'o' && $board[1][2] == 'o' ||
    $board[0][0] == 'x' && $board[0][1] == 'x' && $board[0][2] == 'x' || $board[0][0] == 'o' && $board[0][1] == 'o' && $board[0][2] == 'o') {
    $checkWin = 1;
    exit ('WIN - Horizontal');
} elseif ($board[0][0] == 'x' && $board[1][0] == 'x' && $board[2][0] == 'x' || $board[0][0] == 'o' && $board[1][0] == 'o' && $board[2][0] == 'o' ||
    $board[0][1] == 'x' && $board[1][1] == 'x' && $board[2][1] == 'x' || $board[0][1] == 'o' && $board[1][1] == 'o' && $board[2][1] == 'o' ||
    $board[0][2] == 'x' && $board[1][2] == 'x' && $board[2][2] == 'x' || $board[0][2] == 'o' && $board[1][2] == 'o' && $board[2][2] == 'o') {
    $checkWin = 1;
    exit ('Win - Vertical');
} elseif ($board[0][0] == 'x' && $board[1][1] == 'x' && $board[2][2] == 'x' || $board[0][0] == 'o' && $board[1][1] == 'o' && $board[2][2] == 'o' ||
    $board[0][2] == 'x' && $board[1][1] == 'x' && $board[2][0] == 'x' || $board[0][2] == 'o' && $board[1][1] == 'o' && $board[2][0] == 'o') {
    $checkWin = 1;
    exit ('Win - Diagonal');
}

$i = 0;
do {
    echo 'Choose FREE space, choose ROW then COL, use [0,1,2]' . PHP_EOL;

    $chooseRowX = readline('Turn-X: row:');
    $chooseColX = readline('Turn-X: col:');
    $board[$chooseRowX][$chooseColX] = 'x';

    printBoard($board);
    $i++;
    echo PHP_EOL;
    echo 'Choose FREE space, choose ROW then COL, use [0,1,2]' . PHP_EOL;

    $chooseRowO = readline('Turn-O: row:');
    $chooseColO = readline('Turn-O: col:');
    $board[$chooseRowO][$chooseColO] = 'o';

    printBoard($board);
    $i++;
   } while ($i < 9);
