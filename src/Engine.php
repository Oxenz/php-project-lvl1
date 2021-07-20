<?php

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_ROUNDS = 3;
const YES = "yes";
const NO = "no";

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

    for ($i = $min; 0 < $i; $i--) {
        $resultMaxNumber = $max % $i;
        $resultMinNumber = $min % $i;

        if ($resultMaxNumber === 0 && $resultMinNumber === 0) {
            return $i;
        }
    }
}

function generatorProgression()
{
    $lengthNumbers = rand(4, 10);
    $hiddenSymbol = rand(1, $lengthNumbers);
    $stepProgression = rand(1, 10);
    $arrNumbers = [$lengthNumbers];

    for ($i = $lengthNumbers, $index = 0; $i > 0; $i--) {
        $arrNumbers[] = $arrNumbers[$index++] + $stepProgression;
    }

    $saveHiddenSymbol = $arrNumbers[$hiddenSymbol];
    $arrNumbers[$hiddenSymbol] = "..";
    $arrToStr = implode(" ", $arrNumbers);
    return [
        'arrayNum' => $arrToStr,
        'hiddenSym' => $saveHiddenSymbol,
        ];
}

function generatorPrimeNumbers()
{
    $divider = rand(1, 100);
    $result = true;

    for ($i = $divider - 1; $i > 1; $i--) {
        $res = $divider % $i === 0;

        if ($res) {
            $result = false;
            return [
                "divider" => $divider,
                "isPrime" => $result,
            ];
        }
    }

    return [
        "divider" => $divider,
        "isPrime" => $result,
    ];
}
