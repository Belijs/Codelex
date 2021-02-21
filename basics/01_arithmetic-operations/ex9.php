<?php
// Write a program that calculates and displays a person's body mass index (BMI).
// A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2.
// Where weight is measured in pounds and height is measured in inches.
// Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
// A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
// If the BMI is less than 18.5, the person is considered underweight.
// If the BMI value is greater than 25, the person is considered overweight.
//
//Your program must accept metric units.

//BMI = weight x 703 / height ^ 2.

$yourWeight = readline('Enter your weight (kg): ');
$yourHeight = readline('Enter your height (cm): ');

function calculate(int $weight, int $height): string
{
    $pounds = $weight * 2.205;
    $inches = $height / 2.54;
    $result = round(($pounds * 703) / pow($inches, 2), 2);

    if ($result >= 18.5 && $result <= 25) {
        return 'You are perfect!';
    } elseif ($result < 18.5) {
        return 'Please eat something.';
    } else {
        return 'You need to quit junk food ASAP!';
    }
}

echo calculate($yourWeight, $yourHeight);



