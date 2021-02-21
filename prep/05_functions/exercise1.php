<?php
//Create a function that accepts any string and returns the same value with added "codelex" by the end of it. Print this value out.

function codelex (string $text) :string {
    return $text. 'codelex';
}
echo codelex('hello');