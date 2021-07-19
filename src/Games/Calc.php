<?php

namespace Php\Project\Lvl1\Games\Calc;

use Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

use const Php\Project\Lvl1\Engine\NUMBER_ROUNDS;

function calculator()
{
    $nickname = Engine\greeting();
    line('What is the result of the expression?');

    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $genRndNumFirst = rand(1, 15);
        $genRndNumSecond = rand(1, 15);
        $genRndSymbols = Engine\generatorRndSymbols();
        $mathResult = Engine\generatorRndMathOperations($genRndNumFirst, $genRndSymbols, $genRndNumSecond);

        line("Question: $genRndNumFirst $genRndSymbols $genRndNumSecond");
        $response = (int) prompt('Your answer: ');

        if ($mathResult === $response) {
            line("Correct!");
        } else {
            line("$response is wrong answer ;(. Correct answer was '$mathResult'");
            line("Let's try again, $nickname!");
            return false;
        }
    }

    line("Congratulations, {$nickname}!");
}
