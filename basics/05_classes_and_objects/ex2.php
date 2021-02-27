<?php

class Point
{
    public $x;
    public $y;


    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;

    }
// swap with third variable
    public function swapPoints(object $p1, object $p2)
    {
        $thirdX = $p1->x;
        $p1->x = $p2->x;
        $p2->x = $thirdX;

        $thirdY = $p1->y;
        $p1->y = $p2->y;
        $p2->y = $thirdY;

        //return "($pt1->x, $pt1->y)" . PHP_EOL . "($pt2->x, $pt2->y)";
        return "($p2->x, $p2->y)" . PHP_EOL . "($p1->x, $p1->y)";

    }
}

$p1 = new Point(5, 1);
$p2 = new Point(-3, 6);





