<?php

namespace App;

class Car
{
    private string $img;
    private string $make;
    private string $model;
    private int $fuelConsumption;
    private int $price;
    private string $availability;

    public function __construct(string $img, string $make, string $model, int $fuelConsumption, int $price, string $availability)
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

    /**
     * @return string
     */
    public function getAvailability(): string
    {
        return $this->availability;
    }

}