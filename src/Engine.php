<?php

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_ROUNDS = 3;

function greeting()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function generatorRndSymbols()
{
    $plus = "+";
    $minus = "–";
    $multi = "*";

    $randomNum = rand(1, 3);

    switch ($randomNum) {
        case 1:
            return $plus;
        case 2:
            return $minus;
        case 3:
            return $multi;
    }
}

function generatorRndMathOperations($startNumber, $operator, $endNumber)
{
    switch ($operator) {
        case ("+"):
            return $startNumber + $endNumber;
        case ("–"):
            return $startNumber - $endNumber;
        case ("*"):
            return $startNumber * $endNumber;
    }
}

function generatorMaxDivisor($number1, $number2)
{
    $max = max($number1, $number2);
    $min = min($number1, $number2);

    for ($i = $min; $i > 0; $i--) {
        $result = $max % $i;
        if ($result === 0) {
            return $i;
        }
    }
}
