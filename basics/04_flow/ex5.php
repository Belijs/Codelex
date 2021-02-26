<?php
// Write a program called PhoneKeyPad, which prompts user for a String (case insensitive),
// and converts to a sequence of keypad digits.

$letters = str_split(readline('Type in any letter - as many as you want:'));

foreach ($letters as $letter) {

    if ($letter === 'a' || $letter === 'b' || $letter === 'c') {
        echo 2;
    } else
        if ($letter === 'd' || $letter === 'e' || $letter === 'f') {
            echo 3;
        } else
            if ($letter === 'g' || $letter === 'h' || $letter === 'i') {
                echo 4;
            } else
                if ($letter === 'j' || $letter === 'k' || $letter === 'l') {
                    echo 5;
                } else
                    if ($letter === 'm' || $letter === 'n' || $letter === 'o') {
                        echo 6;
                    } else
                        if ($letter === 'p' || $letter === 'q' || $letter === 'r' || $letter === 's') {
                            echo 7;
                        } else
                            if ($letter === 't' || $letter === 'u' || $letter === 'v') {
                                echo 8;
                            } else
                                if ($letter === 'w' || $letter === 'x' || $letter === 'y' || $letter === 'z') {
                                    echo 9;
                                } else {
                                    echo 'Unknown letter';
                                }
}
foreach ($letters as $letter) {
    switch ($letter) {
        case ($letter === 'a'):
        case ($letter === 'b'):
        case ($letter === 'c'):
            echo 2;
            break;
        case ($letter === 'd'):
        case ($letter === 'e'):
        case ($letter === 'f'):
            echo 3;
            break;
        case ($letter === 'g'):
        case ($letter === 'h'):
        case ($letter === 'i'):
            echo 4;
            break;
        case ($letter === 'j'):
        case ($letter === 'k'):
        case ($letter === 'l'):
            echo 5;
            break;
        case ($letter === 'm'):
        case ($letter === 'n'):
        case ($letter === 'o'):
            echo 6;
            break;
        case ($letter === 'p'):
        case ($letter === 'q'):
        case ($letter === 'r'):
        case ($letter === 's'):
            echo 7;
            break;
        case ($letter === 't'):
        case ($letter === 'u'):
        case ($letter === 'v'):
            echo 8;
            break;
        case ($letter === 'w'):
        case ($letter === 'x'):
        case ($letter === 'y'):
        case ($letter === 'z'):
            echo 9;
            break;
        default:
            echo 'Unknown letter';
    }
}