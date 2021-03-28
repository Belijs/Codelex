<?php

namespace App;

class ElementCollection
{
    private array $elements;

    public function addElement(Element $element): void
    {
        $this->elements[] = $element;
    }

    public function getElement(): array
    {
        return $this->elements;
    }
}