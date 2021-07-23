<?php

namespace Php\Project\Lvl1\Games\Gcd;

use Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

use const Php\Project\Lvl1\Engine\NUMBER_ROUNDS;

function maxDivisor(): void
{
    $nickname = Engine\greeting();
    line('Find the greatest common divisor of given numbers.');

    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $genRndNumFirst = rand(1, 100);
        $genRndNumSecond = rand(1, 100);
        $mathResult = Engine\generatorMaxDivisor($genRndNumFirst, $genRndNumSecond);

        line("Question: $genRndNumFirst $genRndNumSecond");
        $response = (int) prompt('Your answer: ');

        if ($response === $mathResult) {
            line("Correct!");
        } else {
            line("$response is wrong answer ;(. Correct answer was '$mathResult'");
            line("Let's try again, $nickname!");
            return;
        }
    }

    line("Congratulations, {$nickname}!");
}
