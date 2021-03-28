<?php

namespace Tests;

use App\Scissors;
use App\Rock;
use App\Paper;
use PHPUnit\Framework\TestCase;
use App\Game;

class ScissorTest extends TestCase
{
    public function testName() : void
    {
        $scissor = new Scissors();
        $this->assertEquals('scissors', $scissor->getName());
    }

    public function testWinWhenPaper(): void
    {
        $scissor = new Scissors();
        $paper = new Paper();
        $this->assertTrue(true === $scissor->wins($paper));
    }

    public function testDrawWhenScissor(): void // nav pareizs
    {
        $scissor = new Scissors();
        $paper = new Paper();
        $this->assertFalse(true === $scissor->wins($scissor));
    }

    public function testLooseWhenRock(): void
    {
        $scissor = new Scissors();
        $rock = new Rock();
        $this->assertTrue(true === $rock->wins($scissor));
    }

}