<?php

namespace App;

interface Element
{
    public function getName(): string;

    public function wins(Element $opponent): bool;

}