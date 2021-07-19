<?php

namespace Php\Project\Lvl1\Games\Even;

use function cli\line;
use function cli\prompt;
use const Php\Project\Lvl1\Engine\NUMBER_ROUNDS;

function parityCheck()
{
    $nickname = \Php\Project\Lvl1\Games\Cli\greeting();
    line('Answer "yes" if the number even, otherwise answer "no".');

    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $rndNumber = rand(1, 15);
        $isEven = $rndNumber % 2 === 0;
        line("Question: {$rndNumber}");
        $response = prompt('Your answer: ');

        if ($isEven === true && $response === 'yes') {
            line('Correct!');
        } elseif ($isEven === false && $response === 'no') {
            line('Correct!');
        } else {
            line("'{$response}' is wrong answer ;(. Correct answer was " . ($response === "yes" ? "'no'" : "'yes'"));
            line("Let's try again, {$nickname}");
            return false;
        }
    }

    line("Congratulations, {$nickname}!");
}
