<?php

$animals = ['sheep', 'sheep', 'sheep', 'wolf', 'sheep', 'wolf', 'sheep', 'sheep'];
//expected: 'happy', 'happy', 'OMG', 'HEHE', 'OMG', 'HEHE', 'OMG', 'happy'
// isset() - use to check if have value left or right

for ($i = 0; $i < count($animals); $i++) {
    if ($animals[$i] === 'wolf') {
        echo 'HEHE' . ' ';
    } elseif ((isset($animals[$i - 1]) && $animals[$i - 1] === 'wolf') || (isset($animals[$i + 1]) && $animals[$i + 1] === 'wolf')) {
        echo 'OMG' . ' ';
    } else {
        echo 'happy' . ' ';
    }
}

// $animals[0] === 'sheep' && $animals[$i +1] != 'wolf'
// end($animals) === 'sheep' && $animals[$i -1] != 'wolf'