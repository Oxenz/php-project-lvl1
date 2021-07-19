<?php

namespace Php\Project\Lvl1\Games\Gcd;

use function cli\line;
use function cli\prompt;

use Php\Project\Lvl1\Engine;

use const Php\Project\Lvl1\Engine\NUMBER_ROUNDS;

function maxDivisor()
{
    $nickname = Engine\greeting();
    line('Find the greatest common divisor of given numbers.');

    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $genRndNumFirst = 100;
        $genRndNumSecond = 52;
        $mathResult = Engine\generatorMaxDivisor($genRndNumFirst, $genRndNumSecond);

        line("Question: $genRndNumFirst $genRndNumSecond");
        $response = (int) prompt('Your answer: ');

        if ($response === $mathResult) {
            line("Correct!");
        } else {
            line("$response is wrong answer ;(. Correct answer was '$mathResult'");
            line("Let's try again, $nickname!");
            return false;
        }
    }

    line("Congratulations, {$nickname}!");
}