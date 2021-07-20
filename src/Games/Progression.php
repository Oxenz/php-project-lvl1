<?php

namespace Php\Project\Lvl1\Games\Progression;

use Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

use const Php\Project\Lvl1\Engine\NUMBER_ROUNDS;

function progression()
{
    $nickname = Engine\greeting();
    line('What number is missing in the progression?');

    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $resultProgression = Engine\generatorProgression();
        line("Question: {$resultProgression['arrayNum']}");
        $response = (int) prompt('Your answer: ');

        if ($resultProgression['hiddenSym'] === $response) {
            line('Correct!');
        } else {
            line("$response is wrong answer ;(. Correct answer was '{$resultProgression['hiddenSym']}'");
            line("Let's try again, $nickname!");
            return false;
        }
    }

    line("Congratulations, {$nickname}!");
}