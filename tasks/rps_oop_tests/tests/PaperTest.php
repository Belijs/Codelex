<?php

namespace Tests;

use App\Scissors;
use App\Rock;
use App\Paper;
use PHPUnit\Framework\TestCase;
use App\Game;

class PaperTest extends TestCase
{
    public function testName() : void
    {
        $paper = new Paper();
        $this->assertEquals('paper', $paper->getName());
    }

    public function testWinWhenRock(): void
    {
        $rock = new Rock();
        $paper = new Paper();
        $this->assertTrue(true === $paper->wins($rock));
    }

    public function testDrawWhenPaper(): void // nav pareizs
    {
        $paper = new Paper();
        $this->assertFalse(true == $paper->wins($paper));
    }

    public function testLooseWhenScissor(): void
    {
        $scissor = new Scissors();
        $paper = new Paper();
        $this->assertFalse(true === $paper->wins($scissor));
    }
}