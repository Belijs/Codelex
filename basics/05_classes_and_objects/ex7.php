<?php
// Dogs families

class Dog
{
    private string $name;
    public string $sex;
    public string $mother = '';
    public string $father = '';

    public function __construct(string $name, string $sex, string $father = '', string $mother = '')
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->father = $father;
        $this->mother = $mother;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function fathersName(): string
    {
        if ($this->father == '') {
            return 'unknown';
        } else {
            return $this->father;
        }
    }
}

$dogs = [
    new Dog('Max', 'male', 'Rocky', 'Lady'),
    new Dog('Rocky', 'male', 'Sam', 'Molly'),
    new Dog('Sparky', 'male'),
    new Dog('Buster', 'male', 'Sparky', 'Molly'),
    new Dog('Sam', 'male'),
    new Dog('Lady', 'female'),
    new Dog('Molly', 'female'),
    new Dog('Coco', 'female', 'Buster', 'Molly'),
];

foreach ($dogs as $dog) {
    echo $dog->getName() . ' father is - ' . $dog->fathersName() . PHP_EOL;
}