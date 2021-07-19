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

    $randomNum = rand(1,3);

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
