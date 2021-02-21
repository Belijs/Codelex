<?php
// Modify the example program to compute the position of an object after falling for 10 seconds,
// outputting the position in meters.

// The correct value is -490.5m.
// x(time) = 0.5 * -9.81*-9.81 + initial velocity (m/s) * time + initial position

$t = readline('For how long will you fall (sec):');

$a = -9.81;
$vi = 0;
$xi = 0;

function gravity(int $t,float $a, int $vi, int $xi): string
{
    return 0.5 * $a * pow($t, 2) + $vi * $t + $xi;
}

echo gravity($t, $a, $vi, $xi) . 'm ';


