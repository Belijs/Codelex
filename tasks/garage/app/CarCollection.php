<?php

namespace App;


class CarCollection
{
    private array $cars;

    public function __construct()
    {
        $jsonData = file_get_contents("app/Storage/garage.json");
        $json = json_decode($jsonData, true);

        foreach ($json as $car) {
            $this->addCar(new Car($car['img'], $car['make'], $car['model'], $car['fuelConsumption'], $car['price'], $car['availability']));
        }
    }

    public function getCars(): array
    {
        return $this->cars;
    }

    public function addCar(Car $car): void
    {
        $this->cars[] = $car;
    }
}