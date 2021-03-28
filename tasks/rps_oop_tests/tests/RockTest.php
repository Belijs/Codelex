<?php

namespace Tests;

use App\Scissors;
use App\Rock;
use App\Paper;
use PHPUnit\Framework\TestCase;
use App\Game;

class RockTest extends TestCase
{
    public function testName() : void
    {
        $rock = new Rock();
        $this->assertEquals('rock', $rock->getName());
    }

    public function testWinWhenScissor(): void
    {
        $rock = new Rock();
        $scissor = new Scissors();
        $this->assertTrue(true === $rock->wins($scissor));
    }

    public function testDrawWhenRock(): void // nav pareizs
    {
        $rock = new Rock();
        $this->assertFalse(true == $rock->wins($rock));
    }

    public function testLooseWhenPaper(): void
    {
        $rock = new Rock();
        $paper = new Paper();
        $this->assertFalse(true === $rock->wins($paper));
    }
}