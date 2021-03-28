<?php

namespace App;

class Game
{
    private ElementCollection $elementOptions;
    private ElementCollection $decision;

    public function __construct()
    {
        $this->elementOptions = new ElementCollection();
        $this->elementOptions->addElement(new Rock());
        $this->elementOptions->addElement(new Paper());
        $this->elementOptions->addElement(new Scissors());
    }

    public function getElementOptions(): ElementCollection
    {
        return $this->elementOptions;
    }

    public function setCombination(Element $player, Element $computer): void
    {
        $this->decision = new ElementCollection();
        $this->decision->addElement($player);
        $this->decision->addElement($computer);
    }

    public function detectWinner(): string
    {
        $player = $this->decision->getElement()[0];
        $computer = $this->decision->getElement()[1];

        if ($this->decision->getElement()[0]->getName() === $this->decision->getElement()[1]->getName()){
            return 'No winners...';
        }

        if ($player->wins($computer)) {
            return 'You won';
        }
        return 'Computer won';
    }
}