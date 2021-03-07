<?php
// Create a date d/m/yyyy

class Date
{
    private int $year;
    private int $month;
    private int $day;

    public function __construct(int $year, int $month, int $day)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function setMonth(int $month): void
    {
        $this->year = $month;
    }

    public function setDay(int $day): void
    {
        $this->year = $day;
    }

    public function displayDate(): string
    {
        return $this->day . '/' . $this->month . '/' . $this->year;
    }

}

$dates = [
    new Date(1914, 6, 28),
    new Date(1939, 9, 1)
];

function dateTest(array $dates): void
{
    foreach ($dates as $date) {
        echo $date->displayDate() . PHP_EOL;
    }
}

dateTest($dates);