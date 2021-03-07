<?php
// Energy drinks

class Buyer
{
    private int $surveyed = 12467;
    private float $purchasedEnergyDrinks = 0.14;
    private float $preferCitrusDrinks = 0.64;

    public function buyAtleastOnePerWeek(): int
    {
        return ceil($this->surveyed * $this->purchasedEnergyDrinks);
    }

    public function preferCitrus(): int
    {
        return ceil($this->buyAtleastOnePerWeek() * $this->preferCitrusDrinks);
    }
}

$result = new Buyer;
echo 'Surveyed people who buy at least 1 energy drink per week: ' . $result->buyAtleastOnePerWeek() . PHP_EOL;
echo 'From those poeple ' . $result->preferCitrus() . ' loves the citrus flavour' . PHP_EOL;
