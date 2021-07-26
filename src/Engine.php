<?php

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_ROUNDS = 3;
const YES = "yes";
const NO = "no";

function greeting(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function generatorRndSymbols(): string
{
    $plus = "+";
    $minus = "-";
    $multi = "*";
    $result = "";

    $randomNum = rand(1, 3);

    switch ($randomNum) {
        case 1:
            $result = $plus;
            break;
        case 2:
            $result = $minus;
            break;
        case 3:
            $result = $multi;
            break;
    }

    return $result;
}

function generatorRndMathOperations(int $startNumber, string $operator, int $endNumber): int
{
    $result = 0;
    // find an elegant solution for storing int (null does not pass the tests)
    // HINT: should return int but returns int|null

    switch ($operator) {
        case ("+"):
            $result = $startNumber + $endNumber;
            break;
        case ("-"):
            $result = $startNumber - $endNumber;
            break;
        case ("*"):
            $result = $startNumber * $endNumber;
            break;
    }

    return $result;
}

function generatorMaxDivisor(int $number1, int $number2): int
{
    $max = max($number1, $number2);
    $min = min($number1, $number2);
    $result = 0;
    // find an elegant solution for storing int (null does not pass the tests)
    // HINT: should return int but returns int|null

    for ($i = $min; 0 < $i; $i--) {
        $resultMaxNumber = $max % $i;
        $resultMinNumber = $min % $i;

        if ($resultMaxNumber === 0 && $resultMinNumber === 0) {
            $result = $i;
            break;
        }
    }

    return $result;
}

function generatorProgression(): array
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

function generatorPrimeNumbers(): array
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
