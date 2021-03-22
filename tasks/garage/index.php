<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Rent</title>

</head>
<body>

<h1 style="color: goldenrod" align="center">Need a car? Receive it today!</h1>


<?php
require_once 'vendor/autoload.php';

use App\CarCollection;

$sixt = new CarCollection();
?>

<table align="center" border="3" width="35%" cellpadding="3" cellspacing="2">

    <tr>
        <th></th>
        <th>Make</th>
        <th>Model</th>
        <th>l/100km</th>
        <th>eur/day</th>
        <th>Available</th>
        <th>Rent</th>
    </tr>

    <?php foreach ($sixt->getCars() as $key => $value) { ?>

        <tr>
            <td align="center" ><img src="app/img/<?= $value->getImg() ?>" alt="car" width="135" height="80"></td>
            <td align="center"><?= strtoupper($value->getMake()) ?></td>
            <td align="center"><?= $value->getModel() ?></td>
            <td align="center"><?= $value->getFuelConsumption() ?></td>
            <td align="center"><?= $value->getPrice() ?></td>
            <td align="center"><?= $value->getAvailability() ?></td>


            <td align="center"><form method="post"> <input type="submit" value="Rent it!"
                        <?php if ($value->getAvailability() == 'no') { ?> disabled <?php } ?>></td>
        </tr>

    <?php } ?>

</table>
</body>
</html>