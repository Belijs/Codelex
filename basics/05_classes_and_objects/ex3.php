<?php
// Simulate a car's fuel gauge and odometer.
class FuelGauge
{
    public int $fuel;

    public function __construct($fuel)
    {
        $this->fuel = $fuel;
    }

    public function showFuel(): string
    {
        return 'Fuel tank: ' . $this->fuel . ' L';
    }

    public function addFuel()
    {
        if ($this->fuel < 70) {
            $this->fuel++;
        }
    }

    public function removeFuel()
    {
        if ($this->fuel > 0) {
            $this->fuel = $this->fuel - 1;
            return $this->fuel;
        }
        return 'Out of gas...' . PHP_EOL;
    }
}

class Odometer
{
    public int $miles;

    public function __construct($miles)
    {

        $this->miles = $miles;
    }

    public function showMiles()
    {
        return 'Miles: ' . $this->miles;
    }

    public function addMiles()
    {
        if ($this->miles <= 999999) {
            $this->miles++;
        }
        if ($this->miles === 1000000) {
            $this->miles = 0;
        }
        return $this->miles;
    }

    public function removeMiles (object $fuel){
        $knowFuel = $fuel->showFuel();
        while ($fuel === 0){
            echo 'Fuel left in the tank: ' . $knowFuel;

        }
    }
}

$fuel = new FuelGauge(20);
$miles = new Odometer(100000);

echo $fuel->showFuel() . PHP_EOL;
echo $miles->showMiles();

echo $miles->removeMiles($fuel);