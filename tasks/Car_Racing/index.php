<?php
require_once('ParticipantInterface.php');
require_once('Car.php');
require_once('Bike.php');
require_once('Track.php');
require_once('CarCollection.php');
require_once('ParticipantInterface.php');

$raceCars = new CarCollection();
$raceCars->addCar(new Car('[car1]', 5));
$raceCars->addCar(new Car('[car2]', 4));
$raceCars->addCar(new Car('[car3]', 3));
//$raceCars->addCar(new Bike('[bik1]', 6));

$bikernieki = new Track(15, $raceCars);

do {
    system('clear');
    echo 'The Race is Happening!!!' . PHP_EOL;

    for ($i = 0; $i < $raceCars->carAmount(); $i++) {
        $car = $raceCars->getCars()[$i];

        if ($bikernieki->position($i) + $car->move() > $bikernieki->getLength()) {
            $bikernieki->finish($i);
        }
        $bikernieki->drive($i);

        if ($bikernieki->position($i) > $bikernieki->getLength() - 1) {
            $bikernieki->finish($i);

            if (!in_array($car->getName(), $bikernieki->getPlace())) {
                $bikernieki->place($car->getName());
            }
        }
    }

    foreach ($bikernieki->getTrack() as $section) {
        echo $section . '|' . PHP_EOL;
    }

    usleep(650000);
    echo PHP_EOL;

} while (count($bikernieki->getPlace()) < $bikernieki->cars->carAmount());

echo '*** LEADERBOARD ***' . PHP_EOL;
for ($i = 1; $i <= $bikernieki->cars->carAmount(); $i++) {
    echo $i . '.place: ' . $bikernieki->getPlace()[$i-1] . PHP_EOL;
}