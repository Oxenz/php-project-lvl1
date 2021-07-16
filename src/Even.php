<?php

namespace Php\Project\Lvl1\Even;

use function cli\line;
use function cli\prompt;

function parityCheck()
{
    $nickname = \Php\Project\Lvl1\Cli\greeting();
    line('Answer "yes" if the number even, otherwise answer "no".');


    for ($i = 0; $i < 3; $i++) {
        $rndNumber = rand(1, 15);
        $isEven = $rndNumber % 2 === 0;
        line("Question: {$rndNumber}");
        $responsePlayer = prompt('Your answer: ');

        if ($isEven === true && $responsePlayer === 'yes') {
            line('Correct!');
        } elseif ($isEven === false && $responsePlayer === 'no') {
            line('Correct!');
        } else {
            line("'{$responsePlayer}' is wrong answer ;(. Correct answer was " . ($responsePlayer === "yes" ? "'no'" : "'yes'"));
            line("Let's try again, {$nickname}");
            return false;
        }
    }

    line("Congratulations, {$nickname}!");
}