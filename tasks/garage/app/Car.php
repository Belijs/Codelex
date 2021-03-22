<?php

namespace App;

class Car
{
    public string $img;
    public string $make;
    public string $model;
    public int $fuelConsumption;
    public int $price;
    public string $availability;

    public function __construct($img, $make, $model, $fuelConsumption, $price, $availability)
    {
        $this->img = $img;
        $this->make = $make;
        $this->model = $model;
        $this->fuelConsumption = $fuelConsumption;
        $this->price = $price;
        $this->availability = $availability;
    }

    /**
     * @return string
     */
    public function getMake(): string
    {
        return $this->make;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return int
     */
    public function getFuelConsumption(): int
    {
        return $this->fuelConsumption;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

}