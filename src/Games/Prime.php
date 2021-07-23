<?php

namespace Php\Project\Lvl1\Games\Prime;

use Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

use const Php\Project\Lvl1\Engine\NUMBER_ROUNDS;
use const Php\Project\Lvl1\Engine\YES;
use const Php\Project\Lvl1\Engine\NO;

function isPrimeNumber(): void
{
    $nickname = \Php\Project\Lvl1\Engine\greeting();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');


    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $resultPrimeNumbers = Engine\generatorPrimeNumbers();
        line("Question: {$resultPrimeNumbers['divider']}");
        $response = prompt('Your answer: ');

        if ($resultPrimeNumbers['isPrime'] === true && $response === YES) {
            line('Correct!');
        } elseif ($resultPrimeNumbers['isPrime'] === false && $response === NO) {
            line('Correct!');
        } else {
            line("$response is wrong answer ;(. Correct answer was " . ($response === "yes" ? "'no'" : "'yes'"));
            line("Let's try again, $nickname!");
            return;
        }
    }

    line("Congratulations, {$nickname}!");
}
